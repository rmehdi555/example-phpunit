<?php

use MathNameSpace\FunctionMath;
use PHPUnit\Framework\TestCase;

class FunctionMathTest extends TestCase
{
    protected $FunctionMath;

    public function setUp()
    {
        $this->FunctionMath = new FunctionMath();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->FunctionMath->average($numbers));
    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->FunctionMath->median($numbers));
    }
}
