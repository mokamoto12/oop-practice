<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class Products
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class Products
{
    private $products;

    /**
     * Products constructor.
     *
     * @param Product[] $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @param Name $productName
     *
     * @return Products
     */
    public function filterName(Name $productName): Products
    {
        return new Products(array_filter($this->products, function (Product $product) use ($productName) {
            return $product->sameNameAs($productName);
        }));
    }

    /**
     * @return string
     */
    public function cliFormat(): string
    {
        return implode(array_map(function (Product $product) {
            return $product->cliFormat();
        }, $this->products));
    }

    /**
     * @return bool
     */
    public function empty(): bool
    {
        return empty($this->products);
    }
}
