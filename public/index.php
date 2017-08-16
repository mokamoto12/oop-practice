<?php

use Mokamoto12\OopPractice\Application;
use Mokamoto12\OopPractice\Infrastructure\Persistence\CSV\ProductRepositoryCSV;
use Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture\ProductRepositoryFixture;

require_once __DIR__ . '/../bootstrap/autoload.php';

//$productRepository = new ProductRepositoryFixture();
$productRepository = new ProductRepositoryCSV(APP_DIR . '/resources/products.csv');
$app = new Application($productRepository);
$app->run($argv);
