<?php
use Mokamoto12\OopPractice\Application;
use Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture\ProductRepositoryFixture;

require_once __DIR__ . '/../vendor/autoload.php';

define('APP_DIR', './../' . __DIR__);

$app = new Application(new ProductRepositoryFixture());
$app->run($argv);
