<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'DbConnection.php';
    include 'includes/GlobalConstants.php';

}

class AccountOverviewController {

    public static function handleRequests() {
        if (isset($_GET['term'])) {
            self::handleAjaxAutoComplete();
        
        } else if ($_POST['request'] == 'return') {
            self::addItemTransaction($_POST['iid'], true);
        
        } else if ($_POST['request'] == 'loan') {
            self::addItemTransaction($_POST['iid'], false);
        }
    }

    private static function addItemTransaction($iid, bool $return=false) {
        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        $verify = "SELECT i.postedby, b.userid FROM items i, bids b WHERE i.itemid = b.itemid AND i.itemid = $1 AND b.status = $2";
        $v = $db -> executeQuery($verify, array($iid, BidStatus::Accepted));
        $r = pg_fetch_assoc($v);

        if ($r['postedby'] != $user && $r['userid'] != $user) {
            print '1';
            return;
        }

        $query = "";
        $array = array();

        if ($r['postedby'] == $user && !$return) {
            $query = "INSERT INTO transaction VALUES ($1, now(), $2, $3)";
            $array = array($iid, $user, TransactionStatus::Loan);
        
        } else if ($r['postedby'] == $user && $return) {
            $query = "UPDATE transaction SET status = $1 WHERE itemid=$2 AND userid=$3 AND status=$4";
            $array = array(TransactionStatus::ReturnAndConfirmed, $iid, $r['userid'], TransactionStatus::Return);

        } else if ($r['userid'] == $user && !$return) {
            $query = "UPDATE transaction SET status = $1 WHERE itemid=$2 AND userid=$3 AND status=$4";
            $array = array(TransactionStatus::LoanAndConfirmed, $iid, $r['postedby'], TransactionStatus::Loan);

        } else if ($r['userid'] == $user && $return) {
            $query = "INSERT INTO transaction VALUES ($1, now(), $2, $3)";
            $array = array($iid, $user , TransactionStatus::Return);

        } else {
            return;
        }

        $result = $db -> executeQuery($query, $array);

        if (pg_affected_rows($result) === 1) {
            print 'true';
        } else {
            print 'false';
        }
    }

    public static function getRecentlyLentOut() {

        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        $query = <<<EOT
        SELECT i.itemid AS "itemid", ii.imagename AS "imagename", i.name AS "name", i.price AS "price", b.bidamount || ' by ' || u.name AS "bidinfo"
        FROM items i
        LEFT JOIN itemimages ii ON ii.itemid = i.itemid
        LEFT JOIN bids b ON b.itemid = i.itemid
        LEFT JOIN users u ON b.userid = u.userid
        WHERE i.postedby=$1
        AND i.avaliability = $2
        AND b.bidamount >= ALL (
          SELECT b1.bidamount
          FROM bids b1
          WHERE b1.itemid = i.itemid
          AND b1.status = $3
        )
EOT;

        $result_lent_out = $db -> executeQuery($query, array ($user, ItemStatus::Avaliable, BidStatus::Valid));

        if (pg_num_rows($result_lent_out) === 0) {
            print '<tr>'; 
            print "<td class='text-center' colspan=5> <p class ='lead'> Aw! It looks like you don't have any items lent out! Why not start by listing some? </p></td>";
            print '</tr>';

            return;
        }

        while ($row = pg_fetch_assoc($result_lent_out)) {
          print '<tr class ="lentoutrow" data-id="' . $row["itemid"] . '">';
          print '<td><img src="itemimages/' . $row['imagename'] . '" width="160" height="160"></td>';
          print '<td>' . $row['name'] . '</td>';
          print '<td>$' . $row['price'] . '</td>';
          (!is_null($row['bidinfo'])) ? print '<td>$' . $row['bidinfo'] . '</td>' : print '<td> No bids yet </td>';
          print '</tr>';
        }
    }

    public static function getPendingTransactions() {
        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        $query = <<<EOT
        SELECT ii.imagename, i.name, b.userid, i.avaliability, t.status, i.itemid, i.postedby, 'loan' as "itemstatus"
        FROM items i
        LEFT JOIN itemimages ii ON i.itemid = ii.itemid
        LEFT JOIN bids b ON b.itemid = i.itemid
        LEFT JOIN transaction t ON t.itemid = i.itemid
        WHERE b.status = $1
        AND i.avaliability = $2
        AND ( (i.postedby = $3 AND t.itemid IS NULL) OR (b.userid = $4 AND t.status = $5) )
        AND NOT EXISTS (SELECT * FROM transaction t2 WHERE t2.userid = b.userid AND t2.itemid = i.itemid AND (t2.status = $6 OR t2.status = $7))

        UNION

        SELECT ii.imagename, i.name, b.userid, i.avaliability, t.status, i.itemid, i.postedby, 'return' as "itemstatus"
        FROM items i
        LEFT JOIN itemimages ii ON i.itemid = ii.itemid
        LEFT JOIN bids b ON b.itemid = i.itemid
        LEFT JOIN transaction t ON t.itemid = i.itemid
        WHERE b.status = $8
        AND i.avaliability = $9
        AND ( (i.postedby = $10 AND (t.status = $11 OR ( t.status = $12 
                AND NOT EXISTS (SELECT * FROM transaction t4 WHERE t4.userid = b.userid AND t4.itemid = i.itemid AND t4.status=$13) )))
            OR (b.userid = $14 AND (t.status = $15 AND NOT EXISTS (SELECT * FROM transaction t5 WHERE t5.userid = b.userid AND t5.itemid = i.itemid AND t5.status=$16) ) ) )
        AND NOT EXISTS (SELECT * FROM transaction t3 WHERE t3.userid = b.userid AND t3.itemid = i.itemid AND t3.status = $17)
EOT;
      
      $loan_array = array(BidStatus::Accepted, ItemStatus::LoanedOut, $user, $user, TransactionStatus::Loan, TransactionStatus::Return, TransactionStatus::ReturnAndConfirmed);
      $return_array = array(BidStatus::Accepted, ItemStatus::LoanedOut, $user, TransactionStatus::Return, TransactionStatus::LoanAndConfirmed, TransactionStatus::Return, $user, TransactionStatus::LoanAndConfirmed, TransactionStatus::Return, TransactionStatus::ReturnAndConfirmed);

      $result = $db -> executeQuery($query, array_merge($loan_array, $return_array));

        if (pg_num_rows($result) === 0) {
            print '<tr>'; 
            print "<td class='text-center' colspan=4> <p class ='lead'> There are no pending transactions at this time. </p></td>";
            print '</tr>';

            return;
        }

        while ($row = pg_fetch_assoc($result)) {
          print '<tr data-id="' . $row['itemid'] . '">';
          print '<td><img src="itemimages/' . $row['imagename'] . '" width="160" height="160"></td>';
          print '<td>' . $row['name'] . '</td>';
          print '<td>' . $row['userid'] . '</td>';

          $button = "<td>";
          $realbutton = "</td>";

        if ($user == $row['postedby'] && is_null($row['status']) && $row['itemstatus'] == 'loan') {
            print '<td>Pending loan out</td>';
            $button = '<td><button class="btn btn-sm btn-primary confirmaction">Item sent out</button>';
            $realbutton = '<button class="loanout hidden btn btn-sm btn-warning">Confirm?</button></td>';

        } else if ($user == $row['postedby'] && $row['status'] == TransactionStatus::LoanAndConfirmed && $row['itemstatus'] == 'return') {
            print '<td>Pending return by borrower</td>';

        } else if ($user == $row['postedby'] && !is_null($row['status']) && $row['itemstatus'] == 'return') {
            print '<td>Pending return confirmation</td>';
            $button = '<td><button class="btn btn-sm btn-success confirmaction">Item returned</button>';
            $realbutton = '<button class="returned hidden btn btn-sm btn-warning">Confirm?</button></td>';
          
        } else if ($user == $row['userid'] && $row['status'] == TransactionStatus::Loan && $row['itemstatus'] == 'loan') {
            print '<td>Pending receive confirmation</td>';
            $button = '<td><button class="btn btn-sm btn-success confirmaction">Received item</button>';
            $realbutton = '<button class="loanout hidden btn btn-sm btn-warning">Confirm?</button></td>';
          
        } else if ($user == $row['userid'] && $row['status'] == TransactionStatus::LoanAndConfirmed && $row['itemstatus'] == 'return') {
            print '<td>Pending return</td>';
            $button = '<td><button class="btn btn-sm btn-success confirmaction">Return item</button>';
            $realbutton = '<button class="returned hidden btn btn-sm btn-warning">Confirm?</button></td>';
        }

          print $button;
          print $realbutton;
          
          print '</tr>';
        }
    }

    private static function handleAjaxAutoComplete() {
        $db = DbConnection::getInstance();
        $query = $db -> executeQuery("SELECT userid FROM users WHERE userid LIKE $1", array($_GET['term'] . '%'));

        $result = "[";

        while ($row = pg_fetch_assoc($query)) {
            $result = $result . "\"" . $row['userid'] . "\",";
        }

        $result = substr($result, 0, -1);
        print $result . "]";
    }

    public static function printAllSuperTypes() {
        $db = DbConnection::getInstance();
        $result = $db -> executeQuery("SELECT type FROM types WHERE superType IS NULL", array());

        while($row = pg_fetch_assoc($result)) {
            print '<option value ="' . $row['type'] . '">' . $row['type'] . '</option>';
        }
    }
}

if (!defined('included')) {
    AccountOverviewController::handleRequests();
}
?>
