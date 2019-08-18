<?php

require "src/Model.php";
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    protected $Model;

    public function setUp()
    {
        $this->Model = new Model();
    }

    public function testCalculationOfMean()
    {
        $numbers = 5;
        $this->assertEquals(5, $this->Model->getAll($numbers));
    }

 
}
