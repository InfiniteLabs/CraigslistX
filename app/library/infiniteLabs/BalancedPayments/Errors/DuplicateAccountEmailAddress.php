<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class DuplicateAccountEmailAddress extends Error
{
    public static $codes = array('duplicate-email-address');
}
