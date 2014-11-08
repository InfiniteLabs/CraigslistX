<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotCredit extends Error
{
    public static $codes = array('funding-destination-not-creditable');
}
