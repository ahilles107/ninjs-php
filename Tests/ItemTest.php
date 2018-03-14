<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */

namespace AHS\Ninjs\Tests;

use AHS\Ninjs\Item;


class ItemTest extends BaseTestCase
{
    public function testInitialization()
    {
        $item = new Item('https://ninjs.ahs/item');
        self::assertInstanceOf(Item::class, $item);

        $serializedItem = $this->getSerializer()->serialize($item, 'json');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"text"}', $serializedItem);
        self::assertTrue($this->getValidator()->isValid($serializedItem));
    }

    public function testTypes()
    {
        $item = new Item('https://ninjs.ahs/item');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"text"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('picture');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"picture"}', $this->getSerializer()->serialize($item, 'json'));


        $item->setType('audio');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"audio"}', $this->getSerializer()->serialize($item, 'json'));


        $item->setType('video');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"video"}', $this->getSerializer()->serialize($item, 'json'));


        $item->setType('graphic');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"graphic"}', $this->getSerializer()->serialize($item, 'json'));


        $item->setType('composite');
        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"composite"}', $this->getSerializer()->serialize($item, 'json'));
    }

    public function testBasicTextItem()
    {
        $item = new Item('https://ninjs.ahs/item');
        $item->setByline('Paweł Mikołajczuk');
        $item->setBodyHtml('<h1>Simple Title</h1> <p>Simple text paragraph</p>');
        $item->setBodyText(strip_tags($item->getBodyHtml()));

        self::assertEquals('{"uri":"https:\/\/ninjs.ahs\/item","type":"text","body_text":"Simple Title Simple text paragraph","body_html":"<h1>Simple Title<\/h1> <p>Simple text paragraph<\/p>","byline":"Pawe\u0142 Miko\u0142ajczuk"}', $this->getSerializer()->serialize($item, 'json'));
        self::assertTrue($this->getValidator()->isValid($this->getSerializer()->serialize($item, 'json')));
    }
}
