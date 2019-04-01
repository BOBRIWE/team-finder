<?php namespace backend\tests;

use PHPUnit\Framework\TestCase;
use TeamFinder\MathExample\Calc;


class MathExampleTest extends TestCase
{
    public function testAdd()
    {
        $this->assertTrue(true);
        $this->assertEquals(3, Calc::Add(2, 1));
    }

    public function testAddFail()
    {
        $this->assertEquals(6, Calc::Add(2, 4), "FAIL EXPECTED!");
    }
}