<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'DbConnection.php';
    include 'includes/GlobalConstants.php';
}

class ItemViewController {

    public static function handleRequests() {

        if ($_POST['type'] == 'bid') {
            self::handlebidding();

        } else if ($_POST['type'] == 'currentbid') {
            print self::getCurrentBidAmount($_POST['itemid']);

        } else if ($_POST['type'] == 'refreshallbids') {
            print self::getAllBidsForItem($_POST['itemid']);

        } else if ($_POST['type'] == 'acceptbid') {
            self::acceptBid($_POST['uid'], $_POST['iid'], $_POST['amt']);

        } elseif ($_POST['type'] == 'cancelbid') {
            self::cancelBid($_POST['uid'], $_POST['iid'], $_POST['amt']);
        
        } elseif ($_POST['type'] == 'delete') {
            self::deleteItem($_POST['itemid']);
        }

    }

    private static function cancelBid(string $uid, string $iid, string $amt) {
        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();
        $amt = floatval($amt);

        if ($uid != $user) {
            print '1';
            return;
        }

        // Set this particular bid to cancelled
        $query1 = "UPDATE bids SET status = $1 WHERE userid = $2 AND itemid = $3 AND bidamount = $4 AND status = $5";

        $r = $db -> executeQuery($query1, array(BidStatus::Canceled, $uid, $iid, $amt, BidStatus::Valid));

        if (pg_affected_rows($r) === 1) {
            print 'true';
        }
    }

    private static function acceptBid(string $uid, string $iid, string $amt) {
        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();
        $amt = floatval($amt);

        $result = $db -> executeQuery("SELECT postedby FROM items WHERE itemid = $1", array($iid));
        $row = pg_fetch_assoc($result);

        if ($row['postedby'] != $user) {
            print '1';
            return;
        }

        // Set this particular bid to accepted
        $query1 = "UPDATE bids SET status = $1 WHERE userid = $2 AND itemid = $3 AND bidamount = $4 AND status = $5";
        // Set the others to not accepted
        $query2 = <<<EOT
        UPDATE bids SET status = $1 WHERE itemid = $2 
        AND (userid, itemid, bidamount) NOT IN (SELECT userid, itemid, bidamount FROM bids WHERE userid = $3 AND itemid = $4 AND bidamount = $5)
        AND status = $6
EOT;
        
        $query3 = "UPDATE items SET avaliability = $1 WHERE itemid = $2";
        
        $db -> newTransaction();
        $r = $db -> executeQuery($query1, array(BidStatus::Accepted, $uid, $iid, $amt, BidStatus::Valid));
        $r2 = $db -> executeQuery($query2, array(BidStatus::NotAccepted, $iid, $uid, $iid, $amt, BidStatus::Valid));
        $r3 = $db -> executeQuery($query3, array(ItemStatus::LoanedOut, $iid));

        if ($r !== FALSE && $r2 !== FALSE && $r3 && pg_affected_rows($r) === 1 && pg_affected_rows($r3) === 1) {
            $db -> commit();
            print 'true';
        } else {
            $db -> rollback();
            print 'false';
        }
    }

    private static function handlebidding() {
        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();

        $result = $db -> executeQuery("SELECT postedby FROM items WHERE itemid = $1", array($_POST['itemid']));
        $row = pg_fetch_assoc($result);

        if ($row['postedby'] == $user) {
            print '1';
            return;
        }

        $amt = self::getCurrentBidAmount($_POST['itemid']);

        if ($amt > 0 && (!is_numeric($_POST['amount']) || $amt >= number_format($_POST['amount'], 2))) {
            print '2';
            return;
        }

        $result = $db -> executeQuery("SELECT userid FROM bids WHERE itemid = $1 AND status = $2 ORDER BY bidamount DESC LIMIT 1", array($_POST['itemid'], BidStatus::Valid));
        $row = pg_fetch_assoc($result);

        if ($row['userid'] == $user) {
            print '3';
            return;
        }

        $result = $db->executeQuery("INSERT INTO bids VALUES ($1, $2, $3, now(), $4)", array($user, $_POST['itemid'], number_format($_POST['amount'], 2), BidStatus::Valid));

        if (pg_affected_rows($result) === 1) {
            print 'true';
        } else {
            print pg_last_error();
        }
    }

    public static function getItemImage(string $iid){
        $db = DbConnection::getInstance();

        $images_folder = 'itemimages/' . DIRECTORY_SEPARATOR;

        $query = $db -> executeQuery("SELECT imagename FROM itemimages WHERE itemid = $1 LIMIT 1", array($iid));
        $row = pg_fetch_assoc($query);

        return $images_folder . $row['imagename'];
    }

    public static function getItemDetails() {
        $db = DbConnection::getInstance();
        $retVal = array();

        $result = $db -> executeQuery("SELECT itemid, name, avaliability, postedby, description FROM items WHERE itemid = $1 LIMIT 1", array($_POST['itemid']));

        if (pg_num_rows($result) === 0) {
            return false;
        }

        $row = pg_fetch_assoc($result);
        $retVal['itemid'] = $row['itemid'];
        $retVal['name'] = $row['name'];
        $retVal['avaliability'] = $row['avaliability'];
        $retVal['postedby'] = $row['postedby'];
        $retVal['description'] = $row['description'];

        return $retVal;
    }

    public static function printItemType(string $itemid) {
        $db = DbConnection::getInstance();

        $query = <<<EOT

        WITH RECURSIVE typetree(type,supertype) AS (
            SELECT t1.type, t1.supertype
            FROM types t1 WHERE t1.type = (SELECT type FROM items WHERE itemid = $1)
            UNION
            SELECT t2.type, t2.supertype
            FROM types t2, typetree t1 WHERE t2.type = t1.supertype
        )

        SELECT type FROM typetree;

EOT;

        $result = $db -> executeQuery($query, array($itemid));

        while ($row = pg_fetch_assoc($result)) {
            print '<li class="breadcrumb-item"><a href="#">' . $row['type'] . '</a></li>';
        }
    }

    public static function getCurrentBidAmount(string $itemid) {
        $db = DbConnection::getInstance();

        $result = $db -> executeQuery("SELECT bidamount FROM bids WHERE itemid = $1 ORDER BY bidamount DESC LIMIT 1", array($itemid));

        if (pg_num_rows($result) === 1) {
            $row = pg_fetch_assoc($result);
            return number_format($row['bidamount'], 2);
        } else {
            $result = $db -> executeQuery("SELECT price FROM items WHERE itemid = $1", array($itemid));
            $row = pg_fetch_assoc($result);
            return number_format($row['price'], 2);
        }
    }

    public static function getAllBidsForItem(string $itemid) {
        $db = DbConnection::getInstance();

        $result = $db -> executeQuery("SELECT userid, bidamount, to_char(biddedon, 'DD Mon YYYY HH:MI:SS AM') AS \"biddedon\", status FROM bids WHERE itemid = $1 AND status <> $2 ORDER BY bidamount DESC, biddedon ASC", array($itemid, BidStatus::Canceled));

        $query = $db -> executeQuery("SELECT postedby FROM items WHERE itemid = $1", array($itemid));
        $owner = pg_fetch_assoc($query);

        $values = array();
        $accepted = "";
        $acceptedBid = -1;
        $i = 0;

        while ($row = pg_fetch_assoc($result)) {

            $values[$i]['userid'] = $row['userid'];
            $values[$i]['bidamount'] = $row['bidamount'];
            $values[$i]['biddedon'] = $row['biddedon'];
            $values[$i]['status'] = $row['status'];

            if ($row['status'] == BidStatus::Accepted) {
                $accepted = "disabled";
                $acceptedBid = $i;
            }

            $i++;
        }

        for ($j = 0; $j < $i; $j ++) {

            print '<tr data-uid="'.  $values[$j]['userid'] . '" data-amt="'. $values[$j]['bidamount'] . '" data-iid="' . $itemid . '">';
            print '<td>' . $values[$j]['userid'] . '</td>';
            print '<td>' . $values[$j]['bidamount'] . '</td>';
            print '<td>' . $values[$j]['biddedon'] . '</td>';
            
            if (AppSession::getCurrentUser() == $owner['postedby'] && $j != $acceptedBid ) {
                print '<td><button class="acceptbid btn btn-primary btn-sm" ' . $accepted . '>Accept this bid </button></td>';
            } else if ($j == $acceptedBid) {
                print '<td><button class="btn btn-success btn-sm" ' . $accepted . '>Bid accepted </button></td>';
            } else if (AppSession::getCurrentUser() == $values[$j]['userid'] && $j != $acceptedBid) {
                print '<td><button class="cancelbid btn btn-danger btn-sm" ' . $accepted . '>Cancel bid</button></td>';
            } else {
                print '<td></td>';
            }
            print '</tr>';
        }

        if ($i === 0) {
            print '<tr><td colspan=4> There are no bids for this item yet! Be the first to bid!</td</tr>';
        }
    }

    public static function isUserAnAdmin() {
        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();

        $result = $db -> executeQuery ("SELECT * FROM users WHERE userid = $1 AND role = 'admin' LIMIT 1", array($user));

        if (pg_num_rows($result) === 1) {
            return true;
        }

        return false;
    }

    private static function deleteItem(String $iid) {
        $db = DbConnection::getInstance();

        if (!self::isUserAnAdmin()) {
            return;
        }

        $result = $db -> executeQuery("DELETE FROM items WHERE itemid = $1", array($iid));

        if (pg_affected_rows($result) === 1) {
            print 'true';
            return;
        }

        print 'false';
    }
}

if (!defined('included')) {
    ItemViewController::handleRequests();
}
?>