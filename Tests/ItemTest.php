<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */

namespace AHS\Ninjs\Tests;

use AHS\Ninjs\Superdesk\Item;

class ItemTest extends BaseTestCase
{
    public function testInitialization()
    {
        $item = new Item('https://ninjs.ahs/item');
        self::assertInstanceOf(Item::class, $item);

        $serializedItem = $this->getSerializer()->serialize($item, 'json');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"text","language":"en"}', $serializedItem);
        self::assertTrue($this->getValidator()->isValid($serializedItem));
    }

    public function testTypes()
    {
        $item = new Item('https://ninjs.ahs/item');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"text","language":"en"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('picture');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"picture","language":"en"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('audio');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"audio","language":"en"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('video');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"video","language":"en"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('graphic');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"graphic","language":"en"}', $this->getSerializer()->serialize($item, 'json'));

        $item->setType('composite');
        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"composite","language":"en"}', $this->getSerializer()->serialize($item, 'json'));
    }

    public function testBasicTextItem()
    {
        $item = new Item('https://ninjs.ahs/item');
        $item->setByline('Paweł Mikołajczuk');
        $item->setBodyHtml('<h1>Simple Title</h1> <p>Simple text paragraph</p>');
        $item->setBodyText(strip_tags($item->getBodyHtml()));

        self::assertEquals('{"guid":"https:\/\/ninjs.ahs\/item","keywords":[],"type":"text","body_text":"Simple Title Simple text paragraph","body_html":"<h1>Simple Title<\/h1> <p>Simple text paragraph<\/p>","language":"en","byline":"Pawe\u0142 Miko\u0142ajczuk"}', $this->getSerializer()->serialize($item, 'json'));
        self::assertTrue($this->getValidator()->isValid($this->getSerializer()->serialize($item, 'json')));
    }
}
