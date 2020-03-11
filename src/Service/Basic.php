<?php

namespace App\Service;

use App\Service\Basic\Foo;
use App\Service\Basic\Bar;

class Basic
{
    /**
     * @var Foo
     */
    public $foo;

    /**
     * @var Bar
     */
    public $bar;

    /**
     * Basic constructor.
     * Autowired class dependencies
     *
     * @param Foo $foo
     * @param Bar $bar
     */
    public function __construct(Foo $foo, Bar $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }
}
