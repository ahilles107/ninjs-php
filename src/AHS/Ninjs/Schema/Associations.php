<?php

declare(strict_types = 1);

namespace AHS\Ninjs\Schema;

class Associations
{
    private $items = [];

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function add($name, $value)
    {
        $this->items[$name] = $value;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->items)) {
            return $this->items[$name];
        }
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }
}