<?php

namespace Mokamoto12\OopPractice;

use Mokamoto12\OopPractice\Domain\Model\Product\Name;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductNotFoundException;
use Mokamoto12\OopPractice\Domain\Model\Product\ProductRepository;

/**
 * Class Application
 * @package Mokamoto12\OopPractice
 */
class Application
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * Application constructor.
     *
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $argv
     */
    public function run(array $argv): void
    {
        if (empty($argv[1])) {
            echo "Please enter product name.\n";
            return;
        }

        try {
            $products = $this->repository->findBy(new Name($argv[1]));
            echo $products->cliFormat();
        } catch (ProductNotFoundException $e) {
            echo $e->getMessage() . "\n";
        }
    }
}

