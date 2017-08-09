<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class Name
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class Name
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
     * @param Name $other
     *
     * @return bool
     */
    public function sameValueAs(self $other): bool
    {
        return $this->toString() === $other->toString();
    }
}
