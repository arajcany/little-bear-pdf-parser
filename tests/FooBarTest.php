<?php

namespace App\Test;

use App\FooBar;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class FooBarTest extends TestCase
{

    public function testReturnTrue()
    {
        $FooBar = new FooBar();
        $result = $FooBar->returnTrue();
        assertEquals(true, $result);
    }

    public function testReturnFalse()
    {
        $FooBar = new FooBar();
        $result = $FooBar->returnFalse();
        assertEquals(false, $result);
    }

    public function testAddNumbers()
    {
        $FooBar = new FooBar();
        $result = $FooBar->addNumbers(1, 5);
        assertEquals(6, $result);

        $result = $FooBar->addNumbers(2, 12);
        assertEquals(14, $result);

        $result = $FooBar->addNumbers(4, 7);
        assertEquals(11, $result);

        $result = $FooBar->addNumbers(9, 0);
        assertEquals(9, $result);
    }
/*
    public function testSplit()
    {
        $FooBar = new FooBar();
        $result = $FooBar->split(4);
        assertEquals(true, $result);
    }
*/
}