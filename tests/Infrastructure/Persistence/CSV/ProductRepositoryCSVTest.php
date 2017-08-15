<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Mokamoto12\OopPractice\Infrastructure\Persistence\CSV\ProductRepositoryCSV;

/**
 * Class ProductRepositoryCSVTest
 * @package Mokamoto12\OopPractice\Infrastructure\Persistence\CSV
 */
class ProductRepositoryCSVTest
{

    public function testFindBy()
    {
        $repository = new ProductRepositoryCSV(APP_DIR . '/resources/products.csv');
    }
}