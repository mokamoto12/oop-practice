<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\Price;
use Mokamoto12\OopPractice\Domain\Model\Product\Product;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductRepositoryFixtureTest
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture
 */
class ProductRepositoryFixtureTest extends TestCase
{
    public function testFindBy()
    {
        $repository = new ProductRepositoryFixture();
        $expect = new Products([new Product(new Name('B'), new Price(1500))]);
        $this->assertEquals($expect, $repository->findBy(new Name('B')));
    }
}
