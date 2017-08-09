<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class Product
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class Product
{
    private $name;
    private $price;

    /**
     * Product constructor.
     *
     * @param ProductName $productName
     * @param Price $price
     */
    public function __construct(ProductName $productName, Price $price)
    {
        $this->name = $productName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function cliFormat(): string
    {
        return $this->format("%n: %p\n");
    }

    /**
     * @param string $style
     *
     * @return string
     */
    private function format(string $style):string
    {
        return str_replace(['%n', '%p'], [$this->name, $this->price->numberFormat()], $style);
    }

    /**
     * @param ProductName $productName
     *
     * @return bool
     */
    public function sameNameAs(ProductName $productName): bool
    {
        return $this->name->sameValueAs($productName);
    }
}
