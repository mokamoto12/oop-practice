<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture;

use Mokamoto12\OopPractice\Domain\Model\Product\Price;
use Mokamoto12\OopPractice\Domain\Model\Product\Product;
use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductNotFoundException;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductRepository;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;

/**
 * Class ProductRepositoryFixture
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture
 */
class ProductRepositoryFixture implements ProductRepository
{
    private $products;

    /**
     * ProductRepositoryFixture constructor.
     */
    public function __construct()
    {
        $data = [
            ['A', 1000],
            ['A', 1005],
            ['B', 1500],
            ['C', 2000],
            ['D', 2500],
            ['E', 3000],
            ['F', 3500]
        ];
        $this->products = new Products(array_map(function ($d) {
            return new Product(new Name($d[0]), new Price($d[1]));
        }, $data));
    }

    /**
     * @param Name $productName
     *
     * @return Products
     */
    public function findBy(Name $productName): Products
    {
        $filteredProducts = $this->products->filterName($productName);
        if ($filteredProducts->empty()) {
            throw new ProductNotFoundException("Product name: {$productName} is not found.\n");
        }
        return $filteredProducts;
    }
}