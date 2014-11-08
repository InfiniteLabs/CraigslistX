<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class InvalidRoutingNumber extends Error
{
    public static $codes = array('invalid-routing-number');
}
