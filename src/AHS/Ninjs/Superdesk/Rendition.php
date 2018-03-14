<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs\Superdesk;

use AHS\Ninjs\Rendition as BaseRendition;

/**
 * Class Rendition.
 */
class Rendition extends BaseRendition
{
    /**
     * @var string
     */
    protected $media;

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @param string $media
     */
    public function setMedia(string $media)
    {
        $this->media = $media;
    }
}
