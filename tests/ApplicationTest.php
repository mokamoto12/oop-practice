<?php
namespace Mokamoto12\OopPractice;

use Mokamoto12\OopPractice\Infrastructure\Persistence\Fixture\ProductRepositoryFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 * @package Mokamoto12\OopPractice
 */
class ApplicationTest extends TestCase
{
    /**
     * @var Application
     */
    public $app;

    public function setUp()
    {
        $this->app = new Application(new ProductRepositoryFixture());
    }

    public function testRun()
    {
        ob_start();
        $this->app->run([1 => 'A']);
        $this->assertEquals("A: 1,000\nA: 1,005\n", ob_get_clean());
    }

    public function testRun2()
    {
        ob_start();
        $this->app->run([1 => '--help']);
        $this->assertEquals("Product name: --help is not found.\n", ob_get_clean());
    }

    public function testRun3()
    {
        ob_start();
        $this->app->run([]);
        $this->assertEquals("Please enter product name.\n", ob_get_clean());
    }
}
