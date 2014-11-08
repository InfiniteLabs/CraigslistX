<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class NoFundingSource extends Error
{
    public static $codes = array('no-funding-source');
}
