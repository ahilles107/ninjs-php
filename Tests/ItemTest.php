<?php

use AHS\Ninjs\Item;


class ItemTest extends \PHPUnit\Framework\TestCase
{
    public function testInitialization()
    {
        $item = new Item();

        self::assertInstanceOf(Item::class, $item);
    }
}
