<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

use PHPUnit\Framework\TestCase;

/**
 * Class ProductTest
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class ProductTest extends TestCase
{
    /**
     * @var Product
     */
    public $product;

    public function setUp()
    {
        $this->product = new Product(new Name('ABC'), new Price(1000));
    }

    public function testCliFormat()
    {
        $this->assertEquals("ABC: 1,000\n", $this->product->cliFormat());
    }

    public function testSameNameAs()
    {
        $this->assertTrue($this->product->sameNameAs(new Name('ABC')));
    }

    public function testSameNameAs2()
    {
        $this->assertFalse($this->product->sameNameAs(new Name('XXX')));
    }
}
