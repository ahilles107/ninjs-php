<?php

declare(strict_types = 1);

namespace AHS\Ninjs;

class Rendition
{
    /**
     * The URL for accessing the rendition as a resource.
     *
     * @format uri
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
}