<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

use PHPUnit\Framework\TestCase;

/**
 * Class PriceTest
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class PriceTest extends TestCase
{
    /**
     * @var Price
     */
    public $price;

    public function setUp()
    {
        $this->price = new Price(1000000);
    }

    public function testNumberFormat()
    {
        $this->assertEquals('1,000,000', (new Price(1000000))->numberFormat());
    }
}
