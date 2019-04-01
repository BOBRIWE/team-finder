<?php namespace backend\tests;

use PHPUnit\Framework\TestCase;
use TeamFinder\MathExample\Calc;


class MathExampleTest extends TestCase
{
    public function testAdd3()
    {
        $this->assertTrue(true);
        $this->assertEquals(3, Calc::Add(2, 1));
    }

    public function testAdd8()
    {
        $this->assertEquals(6, Calc::Add(2, 4));
    }

    public function test200IQ()
    {
        $this->assertEquals(-200, Calc::Add(200, -400));
    }
}