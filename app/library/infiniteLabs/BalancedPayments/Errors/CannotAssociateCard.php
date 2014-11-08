<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotAssociateCard extends Error
{
    public static $codes = array('cannot-associate-card');
}
