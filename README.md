# Merlin

This repo is a simple demonstration on how you can build a simple ``ServiceProvider`` where you can register any Service 
(or what ever generic name you wanna call these creatures). You can then call said ``ServiceProvider`` to provide
you with an instance of that service.

The ``ServiceProvider`` calls [PHP-DI](https://github.com/php-di/php-di) container to autowire any dependencies
across the board making your life really simple.

You can find this same example inside the `tests` folder:

````php
$service = \App\Provider\ServiceProvider::get(\App\Service\Basic::class);
$result = $service->foo->getAllOfType(1);
$this->assertEquals($result, 'Foo');
````

The `Basic` service class constructor has two dependencies:

````php
public function __construct(Foo $foo, Bar $bar)
{
    $this->foo = $foo;
    $this->bar = $bar;
}
````

`Foo` and `Bar` are modules related to the service. Notice, how we don't need to inject those here?
 We only call upon the `ServiceProvider::get()` function to return us the Service ready for use. PHP-DI handles 
dependency injection automatically with something called `autowiring`.

This is really awesome when you have to buildany type of service that might need other classes as dependencies.
