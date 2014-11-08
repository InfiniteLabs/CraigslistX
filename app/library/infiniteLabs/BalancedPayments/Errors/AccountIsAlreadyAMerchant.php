<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class AccountIsAlreadyAMerchant extends Error
{
    public static $codes = array('account-already-merchant');
}
