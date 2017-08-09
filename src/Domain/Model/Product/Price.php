<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class Price
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class Price
{
    private $price;

    /**
     * Price constructor.
     *
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function numberFormat(): string
    {
        return number_format($this->price);
    }
}
