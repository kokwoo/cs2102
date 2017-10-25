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
        if ($_POST['request'] == 'return') {
            self::addItemTransaction($_POST['iid'], true);
        
        } elseif ($_POST['request'] == 'loan') {
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

        $query = "INSERT INTO transaction VALUES ($1, now(), $2, $3)";
        $status = ($return) ? TransactionStatus::Return : TransactionStatus::Loan;

        $result = $db -> executeQuery($query, array($iid, $user, $status));

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
        SELECT ii.imagename, i.name, b.userid, i.avaliability, t.status, i.itemid
        FROM items i
        LEFT JOIN itemimages ii ON i.itemid = ii.itemid
        LEFT JOIN bids b ON b.itemid = i.itemid
        LEFT JOIN transaction t ON t.itemid = i.itemid
        WHERE (t.itemid IS NULL OR t.status = $1)
        AND b.status = $2
        AND i.avaliability = $3
        AND i.postedby = $4
EOT;
      
      $result = $db -> executeQuery($query, array(TransactionStatus::Loan, BidStatus::Accepted, ItemStatus::LoanedOut, $user));

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

          if (is_null($row['status'])) {
            print '<td>Pending loan out</td>';
            print '<td><button class="btn btn-sm btn-primary confirmaction">Loaned out</button>';
            print '<button class="loanout hidden btn btn-sm btn-warning">Confirm?</button></td>';
          } else {
            print '<td>Pending return</td>';
            print '<td><button class="btn btn-sm btn-success confirmaction">Item returned</button>';
            print '<button class="returned hidden btn btn-sm btn-warning">Confirm?</button></td>';
          }
          
          print '</tr>';
        }
    }

    public static function getHistory() {
        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();
    }
}

if (!defined('included')) {
    AccountOverviewController::handleRequests();
}
?>
