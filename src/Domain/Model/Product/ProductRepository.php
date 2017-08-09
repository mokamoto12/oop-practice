<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Interface ProductRepository
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
interface ProductRepository
{
    /**
     * @param Name $productName
     *
     * @return Products
     */
    public function findBy(Name $productName): Products;
}
