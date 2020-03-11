<?php

namespace App\Provider;

use DI\Container;
use DI\DependencyException;
use DI\NotFoundException;

/**
 * Service provider to which you can register available services
 * and call them from DI Container.
 *
 * Class ServiceProvider
 * @package App\Provider
 */
class ServiceProvider {
    protected static $di;

    /**
     * @var array Registered services
     */
    protected static $services = [
        \App\Service\Basic::class,
    ];

    /**
     * Attempt to fetch a requested service
     *
     * @param $provider
     * @return mixed
     */
    public static function get($provider) {
        # Call PHP-DI Container
        $container = new Container();

        $providerClass = null;

        # Attempt to find registered service
        foreach(self::$services as $p) {
            if($provider === $p) {
                $providerClass = $p;
                break;
            }
        }

        if($providerClass) {
            # Found, so let PHP-DI autowire dependencies
            try {
                return $container->get($providerClass);
            } catch(DependencyException | NotFoundException $e) {
                die($e->getMessage());
            }
        } else {
            die("No such service exists.");
        }
    }
}
