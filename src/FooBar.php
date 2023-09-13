<?php

namespace App;

class FooBar
{
    public function returnTrue()
    {
        return true;
    }

    public function returnFalse()
    {
        return false;
    }

    public function addNumbers($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function split($number)
    {
        if ($number % 2) {
            echo "div by 2";
            return true;
        } else {
            echo "not by 2";
            return false;
        }

    }


}