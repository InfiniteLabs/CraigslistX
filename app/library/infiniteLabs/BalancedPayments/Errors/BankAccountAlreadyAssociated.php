<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class BankAccountAlreadyAssociated extends Error
{
    public static $codes = array('bank-account-already-associated');
}
