<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class InvalidBankAccountNumber extends Error
{
    public static $codes = array('invalid-bank-account-number');
}
