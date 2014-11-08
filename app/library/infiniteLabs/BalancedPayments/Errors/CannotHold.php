<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotHold extends Error
{
    public static $codes = array('funding-source-not-hold');
}
