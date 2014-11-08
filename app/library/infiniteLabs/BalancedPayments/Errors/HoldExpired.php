<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class HoldExpired extends Error
{
    public static $codes = array('authorization-expired');
}
