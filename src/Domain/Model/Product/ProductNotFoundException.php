<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

/**
 * Class ProductNotFoundException
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class ProductNotFoundException extends \OutOfBoundsException
{
    /**
     * ProductNotFoundException constructor.
     *
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
