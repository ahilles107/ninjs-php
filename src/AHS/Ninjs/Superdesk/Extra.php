<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs\Superdesk;

class Extra
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
