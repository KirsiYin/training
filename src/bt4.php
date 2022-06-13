<?php

namespace App;

class Bt4
{
    public function solution($param1) {
        $length = count($param1);
        if ($length == 0){
            return 0;
        } elseif ($length == 1){
            return $param1[0] ;
        } else {
            $max = $param1[0]*$param1[1];
            for ($x = 2; $x < $length; $x++) {
                if ($param1[$x]*$param1[$x-1] > $max) $max = $param1[$x]*$param1[$x-1];
            }
            return $max;
        }
    }
}