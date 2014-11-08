<?php
use infiniteLabs\BalancedPayments\BalancedPaymentsServiceProvider;

class EscrowController extends BaseController {
    /*
    |-------------------------------------------------
    | EscorwController Controller File
    |-------------------------------------------------
    */

    public function __construct(){
        Httpful\Bootstrap::init();
        RESTful\Bootstrap::init();
        infiniteLabs\BalancedPayments\Bootstrap::init();
        infiniteLabs\BalancedPayments\Settings::$api_key = "ak-test-19GwHG7jYR8FFKR9rBIVyiY1uXBemYVov";
    }

    //accept cards
    public function testingBalanced(){
        $merchant = infiniteLabs\BalancedPayments\Customer::get("/customers/CU499nloIJTytIag1r7VFBCg");
        $order = $merchant->orders->create();

        return Response::json(array('error' => false, 'data' => $order));
    }
} 