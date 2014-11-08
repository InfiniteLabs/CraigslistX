<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class AddressVerificationFailed extends Error
{
    public static $codes = array('address-verification-failed');
}
