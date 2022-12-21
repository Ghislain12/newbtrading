<?php
namespace App\me\salanon\PROJETS\OWN\newbtrading\app;

use App\Models\Loan;
use App\Models\Investment;

function isOjectNull(object $object): bool
{
    $arr = (array)$object;
    if (!$arr) {
        return false;
    } else {
        return true;
    }
}

function checkPeriod(string $period, string $number): bool
{
    if (($period == 'year' && $number <= 20) || ($period == 'month' && $number <= 240)) {
        return true;
    } else {
        return false;
    }
}

function isValidatedLoan(Loan $loan): bool
{
    return ($loan->statut == true) ? true : false;
}

