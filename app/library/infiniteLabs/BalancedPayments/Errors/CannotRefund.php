<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotRefund extends Error
{
    public static $codes = array('funding-source-not-refundable');
}
