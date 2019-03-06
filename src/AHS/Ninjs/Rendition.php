<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs;

class Rendition
{
    /**
     * The URL for accessing the rendition as a resource.
     *
     * @var string
     */
    protected $href;

    /**
     * A MIME type which applies to the rendition.
     *
     * @var string
     */
    protected $mimetype;

    /**
     * A title for the link to the rendition resource.
     *
     * @var string
     */
    protected $title;

    /**
     * For still and moving images: the height of the display area measured in pixels.
     *
     * @var int
     */
    protected $height;

    /**
     * For still and moving images: the width of the display area measured in pixels.
     *
     * @var int
     */
    protected $width;

    /**
     * The size of the rendition resource in bytes.
     *
     * @var int
     */
    protected $sizeinbytes;

    /**
     * Rendition constructor.
     *
     * @param string $href
     */
    public function __construct(string $href)
    {
        $this->setHref($href);
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param string $href
     */
    public function setHref(string $href)
    {
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * @param string $mimetype
     */
    public function setMimetype(string $mimetype)
    {
        $this->mimetype = $mimetype;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getSizeinbytes()
    {
        return $this->sizeinbytes;
    }

    /**
     * @param int $sizeinbytes
     */
    public function setSizeinbytes(int $sizeinbytes)
    {
        $this->sizeinbytes = $sizeinbytes;
    }
}
