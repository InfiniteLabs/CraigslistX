<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class BankAccountVerificationFailure extends Error
{
    public static $codes = array(
        'bank-account-authentication-not-pending',
        'bank-account-authentication-failed',
        'bank-account-authentication-already-exists'
    );
}
