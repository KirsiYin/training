<?php

namespace App;

class Bt3
{
    public function solution($inputString) {
        $length = strlen($inputString);
    $a = '';
    $b = '';
    if($length % 2 == 0){
        $a = substr($inputString, 0, $length/2);
        $b = substr($inputString, $length/2, $length);
    }else {
        $a = substr($inputString, 0, $length/2);
        $b = substr($inputString, (int)($length/2 + 1), $length);
    }
    $b = strrev($b);
    if($a == $b)
        return true;
    return false;
    }
}