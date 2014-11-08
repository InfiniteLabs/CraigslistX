<?php

namespace infiniteLabs\BalancedPayments\Errors;

use infiniteLabs\BalancedPayments\Errors\Error;

class MarketplaceAlreadyCreated extends Error
{
    public static $codes = array('marketplace-already-created');
}
