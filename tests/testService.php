<?php

namespace Tests;

class Service extends \PHPUnit\Framework\TestCase {
    /**
     * @var \App\Service\Basic
     */
    protected static $service;

    public static function setUpBeforeClass(): void
    {
        self::$service = \App\Provider\ServiceProvider::get(\App\Service\Basic::class);
    }

    public function testFooGetAllOfType()
    {
        # We request the Service from the ServiceProvider
        $result = self::$service->foo->getAllOfType(1);
        $this->assertEquals($result, 'Foo');
    }

    public function testBarGetAll()
    {
        # We request the Service from the ServiceProvider
        $result = self::$service->bar->getAll();
        $this->assertEquals($result[1], 'Foo');
    }
}
