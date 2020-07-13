<?php

namespace Drupal\Tests\drupal8_phpunit_demo;

use Drupal\Tests\UnitTestCase;
use Drupal\drupal8_phpunit_demo\Demo;

/**
 * Basic demo tests.
 *
 * @group drupal8_phpunit_demo
 */
class DemoTest extends UnitTestCase
{
    protected $demo;

    protected function setUp()
    {
        $this->demo = new Demo;
    }

    protected function tearDown()
    {
        unset($this->demo);
    }

    public function values()
    {
        return [
            [1], [5], [10], [15], [20]
        ];
    }

    /**
     * Class instantiation
     */
    public function testClassCanBeInstatiated()
    {
        $this->assertInstanceOf('Drupal\drupal8_phpunit_demo\Demo', $this->demo);
    }

    /**
     * Property initial value
     */
    public function testInitialSizeValue()
    {
        $this->assertEquals(1, $this->demo->getSize());
    }

    /**
     * Get size equals Set size
     * @dataProvider values
     */
    public function testGetSizeEqualsSetSize($size)
    {
        $this->demo->setSize($size);
        $this->assertEquals($size, $this->demo->getSize());
    }

    /**
     * Get size is NOT different of Set size
     * @dataProvider values
     */
    public function testNegativeAssertionOfGetSize($size)
    {
        $this->demo->setSize($size);

        $this->assertNotEquals($size+1, $this->demo->getSize());
    }
}
