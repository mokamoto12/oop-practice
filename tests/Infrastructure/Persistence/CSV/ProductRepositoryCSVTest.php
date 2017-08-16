<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\Price;
use Mokamoto12\OopPractice\Domain\Model\Product\Product;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;
use Mokamoto12\OopPractice\Infrastructure\Persistence\CSV\ProductRepositoryCSV;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductRepositoryCSVTest
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\CSV
 */
class ProductRepositoryCSVTest extends TestCase
{

    public function testFindBy()
    {
        $repository = new ProductRepositoryCSV(APP_DIR . '/tests/fixtures/productsFixture.csv');
        $expect = new Products([new Product(new Name('B'), new Price(1500))]);
        $this->assertEquals($expect, $repository->findBy(new Name('B')));
    }
}