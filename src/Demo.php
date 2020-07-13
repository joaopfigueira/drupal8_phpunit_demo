<?php

namespace Drupal\drupal8_phpunit_demo;

class Demo
{
    private $size;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->size = 1;
    }

    /**
     * Sets size property
     *
     * @param int size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * Gets size property
     *
     * @return int size
     */
    public function getSize()
    {
        return $this->size;
    }
}
