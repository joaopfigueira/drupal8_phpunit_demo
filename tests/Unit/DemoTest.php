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
    /**
     * Class instantiation
     */
    public function testClassCanBeInstatiated()
    {
        $demo = new Demo;

        $this->assertInstanceOf('Drupal\drupal8_phpunit_demo\Demo', $demo);
    }

    /**
     * Property initial value
     */
    public function testInitialSizeValue()
    {
        $demo = new Demo;

        $this->assertEquals(1, $demo->getSize());
    }

    /**
     * Get size equals Set size
     */
    public function testGetSizeEqualsSetSize()
    {
        $size = 1;

        $demo = new Demo;
        $demo->setSize($size);

        $this->assertEquals($size, $demo->getSize());
    }

    /**
     * Get size is NOT different of Set size
     */
    public function testNegativeAssertionOfGetSize()
    {
        $size = 1;

        $demo = new Demo;
        $demo->setSize($size);

        $this->assertNotEquals($size+1, $demo->getSize());
    }
}
