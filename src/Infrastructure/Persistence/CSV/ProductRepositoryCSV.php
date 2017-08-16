<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\Price;
use Mokamoto12\OopPractice\Domain\Model\Product\Product;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductRepository;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;

/**
 * Class ProductRepositoryCSV
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\CSV
 */
class ProductRepositoryCSV implements ProductRepository
{
    /**
     * @var Product[]
     */
    private $products;

    /**
     * ProductRepositoryCSV constructor.
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $handle = fopen($path, 'r');
        if ($handle === false) {
            throw new FileNotFoundException("File path: {$path} is not found.");
        }
        while (($data = fgetcsv($handle)) !== false) {
            $this->products[] = new Product(new Name($data[0]), new Price((int)$data[1]));
        }
    }

    /**
     * @param Name $productName
     *
     * @return Products
     */
    public function findBy(Name $productName): Products
    {
        return new Products(array_values(array_filter($this->products, function (Product $product) use ($productName) {
            return $product->sameNameAs($productName);
        })));
    }
}
