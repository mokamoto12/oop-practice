<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Interface ProductRepository
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
interface ProductRepository
{
    /**
     * @param ProductName $productName
     *
     * @return Products
     */
    public function findBy(ProductName $productName): Products;
}
