<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class InsufficientFunds extends Error
{
    public static $codes = array('insufficient-funds');
}
