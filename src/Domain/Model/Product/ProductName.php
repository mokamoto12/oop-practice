<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class ProductName
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class ProductName
{
    private $name;

    /**
     * ProductName constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @param ProductName $other
     *
     * @return bool
     */
    public function sameValueAs(self $other): bool
    {
        return $this->toString() === $other->toString();
    }
}
