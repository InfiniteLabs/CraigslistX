<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class Declined extends Error
{
    public static $codes = array('funding-destination-declined', 'authorization-failed', 'card-declined');
}
