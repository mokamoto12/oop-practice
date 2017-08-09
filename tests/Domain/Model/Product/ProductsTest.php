<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

use PHPUnit\Framework\TestCase;

/**
 * Class ProductsTest
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class ProductsTest extends TestCase
{
    /**
     * @var Products
     */
    public $products;

    public function setUp()
    {
        $this->products = new Products([
            new Product(new Name('A'), new Price(1000)),
            new Product(new Name('A'), new Price(1050)),
            new Product(new Name('B'), new Price(1500)),
            new Product(new Name('C'), new Price(2000))
        ]);
    }

    public function testFilterName()
    {
        $this->assertEquals("A: 1,000\nA: 1,050\n", $this->products->filterName(new Name('A'))->cliFormat());
    }

    public function testFilterName2()
    {
        $this->assertTrue($this->products->filterName(new Name('Z'))->empty());
    }

    public function testCliFormat()
    {
        $this->assertEquals("A: 1,000\nA: 1,050\nB: 1,500\nC: 2,000\n", $this->products->cliFormat());
    }

    public function testEmpty()
    {
        $this->assertTrue((new Products([]))->empty());
    }

    public function testEmpty2()
    {
        $this->assertFalse($this->products->empty());
    }
}
