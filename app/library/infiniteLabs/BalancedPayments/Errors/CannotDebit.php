<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotDebit extends Error
{
    public static $codes = array('funding-source-not-debitable');
}
