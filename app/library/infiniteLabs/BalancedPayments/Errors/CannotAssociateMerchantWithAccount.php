<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class CannotAssociateMerchantWithAccount extends Error
{
    public static $codes = array('cannot-associate-merchant-with-account');
}