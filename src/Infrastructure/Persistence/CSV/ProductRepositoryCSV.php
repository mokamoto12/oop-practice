<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductRepository;
use Mokamoto12\OopPractice\Domain\Model\Product\Products;

/**
 * Class ProductRepositoryCSV
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\CSV
 */
class ProductRepositoryCSV implements ProductRepository
{
    /**
     * @var bool|resource
     */
    private $fp;

    /**
     * ProductRepositoryCSV constructor.
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $fp = fopen($path, 'r');
        if ($fp === false) {
            throw new
        }
    }

    /**
     * @param Name $productName
     *
     * @return Products
     */
    public function findBy(Name $productName): Products
    {
    }
}