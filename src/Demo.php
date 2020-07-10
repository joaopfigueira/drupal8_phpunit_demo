<?php

namespace Drupal\drupal8_phpunit_demo;

/**
 * Demo class - a simple demonstration.
 */
class Demo
{
    private $size = 0;

    /**
     * Sets the size.
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;

        return $size;
    }

    /**
     * Returns the set size.
     *
     * @return int size
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
