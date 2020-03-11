<?php

namespace App\Service\Basic;

use App\Model\BasicFoo;

class Foo {    /**
     * @var BasicFoo
     */
    protected $model;

    /**
     * Bar constructor.
     * @param BasicFoo $model
     */
    public function __construct(BasicFoo $model)
    {
        $this->model = $model;
    }


    /**
     * @param int $type
     * @return bool|mixed
     */
    public function getAllOfType(int $type) {
        $rows = $this->model->getTypes();
        return $rows[$type] ?? false;
    }
}
