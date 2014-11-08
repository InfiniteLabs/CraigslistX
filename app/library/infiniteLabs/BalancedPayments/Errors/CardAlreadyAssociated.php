<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CardAlreadyAssociated extends Error
{
    public static $codes = array('card-already-funding-src');
}
