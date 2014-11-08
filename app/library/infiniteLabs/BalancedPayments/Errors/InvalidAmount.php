<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class InvalidAmount extends Error
{
    public static $codes = array('invalid-amount');
}
