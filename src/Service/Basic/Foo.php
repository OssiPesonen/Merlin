<?php

namespace App\Service\Basic;

class Foo {
    /**
     * @param int $type
     * @return bool|mixed
     */
    public function getAllOfType(int $type) {
        $rows = [1 => 'Foo', 2 => 'Bar'];
        return $rows[$type] ?? false;
    }
}
