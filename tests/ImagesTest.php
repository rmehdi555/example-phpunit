<?php

use ImagesNameSpace\Images;
use PHPUnit\Framework\TestCase;

class ImagesTest extends TestCase
{
    protected $Images;

    public function setUp()
    {
        $this->Images = new Images();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6];
        $this->assertEquals(16, $this->Images->sumImages($numbers));
    }

 
}
