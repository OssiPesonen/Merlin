<?php

namespace App\Service\Basic;

use App\Model\BasicBar;

class Bar {
    /**
     * @var BasicBar
     */
    protected $model;

    /**
     * Bar constructor.
     * @param BasicBar $model
     */
    public function __construct(BasicBar $model)
    {
        $this->model = $model;
    }

    /**
     * @return array
     */
    public function getAll() {
        return [1 => 'Foo', 2 => 'Bar'];
    }
}
