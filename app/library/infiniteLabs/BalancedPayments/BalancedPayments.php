<?php namespace infiniteLabs\BalancedPayments;

/**
 * Laravel BalancedPayments
 *
 * This bundle is created to handle server-side works of BalancedPayments API (https://docs.balancedpayments.com)
 *
 * @package Laravel
 * @category ServiceProvider
 * @version 0.0.1
 * @author Xavier Johnson <xavierdjohnson@gmail.com>
 */

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Filesystem\Filesystem;

class BalancedPayments {
    /*
    |-------------------------------------------------
    | BalancedPayments.php Controller File
    |-------------------------------------------------
    */
    function __construct(){
        \infiniteLabs\BalancedPayments\Bootstrap::init();
    }
} 