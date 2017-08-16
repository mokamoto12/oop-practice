<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\Price;
use Mokamoto12\OopPractice\Domain\Model\Product\Product;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductRepository;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;
use Mokamoto12\OopPractice\Infrastructure\Persistence\CSV\ProductRepositoryCSV;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductRepositoryCSVTest
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\CSV
 */
class ProductRepositoryCSVTest extends TestCase
{
    /**
     * @var ProductRepository
     */
    public $repository;

    public function setUp()
    {
        $this->repository = new ProductRepositoryCSV(APP_DIR . '/tests/fixtures/productsFixture.csv');
    }

    public function testFindBy()
    {
        $expect = new Products([new Product(new Name('B'), new Price(1500))]);
        $this->assertEquals($expect, $this->repository->findBy(new Name('B')));
    }

    /**
     * @expectedException Mokamoto12\OopPractice\Domain\Model\Product\ProductNotFoundException
     * @expectedExceptionMessage Product name: XXX is not found.
     */
    public function testFindBy2()
    {
        $this->repository->findBy(new Name('XXX'));
    }
}
