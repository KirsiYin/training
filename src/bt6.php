<?php

namespace App;

class Bt6
{
    public function solution($param1) {
        $array = array_unique($param1);
        $max = max($array);
        $min = min($array);
        return ($max - $min - count($array) +1);
    }
}