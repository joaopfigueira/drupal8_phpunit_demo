<?php

namespace Drupal\Tests\drupal8_phpunit_demo\Demo;

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

        $this->assertEquals(0, $demo->getSize());
    }

    /**
     * Get size equals Set size
     */
    public function testGetSizeEqualsSetSize()
    {
        $size = 1;

        $demo = new Demo;

        $this->assertEquals($demo->setSize($size), $demo->getSize());
    }

    /**
     * Get size is NOT different of Set size
     */
    public function testNegativeAssertionOfGetSize()
    {
        $demo = new Demo;

        $demo->setSize(2);

        $this->assertNotEquals(3, $demo->getSize());
    }
}
