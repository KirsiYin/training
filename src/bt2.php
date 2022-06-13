<?php

namespace App;

class Bt2
{
    public function solution($param1) {
        if ($param1 % 100 == 0) {
            return $param1/100  ;
        } else {
            return (int)($param1/100) + 1;
        }
    }
}