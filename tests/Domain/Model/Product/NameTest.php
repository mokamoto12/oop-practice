<?php

namespace Mokamoto12\OopPractice\Domain\Model\Product;

use PHPUnit\Framework\TestCase;

/**
 * Class NameTest
 * @package Mokamoto12\OopPractice\Domain\Model\Product
 */
class NameTest extends TestCase
{
    public function testToString()
    {
        $this->assertEquals('ABC', (new Name('ABC'))->toString());
    }

    public function test__toString()
    {
        $this->assertEquals('ABC', (string)(new Name('ABC')));
    }

    public function testSameValueAs()
    {
        $this->assertTrue((new Name('ABC'))->sameValueAs(new Name('ABC')));
    }

    public function testSameValueAs2()
    {
        $this->assertFalse((new Name('ABC'))->sameValueAs(new Name('XXX')));
    }
}
