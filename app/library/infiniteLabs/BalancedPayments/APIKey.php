<?php

namespace infiniteLabs\BalancedPayments;

use infiniteLabs\BalancedPayments\Resource;
use infiniteLabs\BalancedPayments\Settings;
use \RESTful\URISpec;

/**
 * Represents an api key. These are used to authenticate you with the api.
 *
 * Typically you create an initial api key:
 *
 * <code>
 * print \infiniteLabs\BalancedPayments\Settings::$api_key == null;
 * $api_key = new \infiniteLabs\BalancedPayments\APIKey();
 * $api_key = api_key->save();
 * $secret = $api_key->secret;
 * print $secret;
 * </code>
 *
 * Then save the returned secret (we don't store it) and configure the client
 * to use it:
 *
 * <code>
 * \infiniteLabs\BalancedPayments\Settings::$api_key = 'my-api-key-secret';
 * </code>
 *
 * You can later add another api key if you'd like to rotate or expire old
 * ones:
 *
 * <code>
 * $api_key = new \infiniteLabs\BalancedPayments\APIKey();
 * $api_key = api_key->save();
 * $new_secret = $api_key->secret;
 * print $new_secret;
 *
 * \infiniteLabs\BalancedPayments\Settings::$api_key = $new_secret;
 *
 * \infiniteLabs\BalancedPayments\APIKey::query()
 *     ->sort(\infiniteLabs\BalancedPayments\APIKey::f->created_at->desc())
 *     ->first()
 *     ->delete();
 * </code>
 */
class APIKey extends \infiniteLabs\BalancedPayments\Resource
{
    //protected static $_uri_spec = null;

    public static function init()
    {
        self::$_uri_spec = new URISpec('api_keys', 'id', '/');
        self::$_registry->add(get_called_class());
    }
}
