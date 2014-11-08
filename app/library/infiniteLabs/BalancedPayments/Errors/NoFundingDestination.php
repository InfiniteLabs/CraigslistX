<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class NoFundingDestination extends Error
{
    public static $codes = array('no-funding-destination');
}
