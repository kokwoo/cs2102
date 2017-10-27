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
    const Returned = 3;
}

abstract class TransactionStatus {
    const Return = 1;
    const Loan = 2;
    const LoanAndConfirmed = 3;
    const ReturnAndConfirmed = 4;
}

?>
