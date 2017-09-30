<?php

abstract class BidStatus {

    const Unknown = 0;
    const Valid = 1;
    const Canceled = 2;
    const Accepted = 3;
    const NotAccepted = 4;
}

abstract class ItemStatus {
    const Avaliable = 1;
    const LoanedOut = 2;
}

const ITEM_IMAGES_FOLDER = $_SERVER['DOCUMENT_ROOT'] . '/itemimages/';

?>
