<?php

namespace App;

class Bt5
{
    public function solution($param1) {
        $a=array(1);
        for ($x = 1; $x < $param1 ; $x++){
            array_push($a, ($a[$x-1] + ($x+1) *2 + ($x -1) *2));
        }
        return $a[$param1-1];
    }
}