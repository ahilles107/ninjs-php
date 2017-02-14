<?php

declare(strict_types = 1);

namespace AHS\Ninjs;

final class Object
{
    /**
     * The name of the object.
     *
     * @var string
     */
    protected $name;

    /**
     * The relationship of the content of the news object to the object.
     *
     * @var string
     */
    protected $rel;

    /**
     * The identifier of a scheme (= controlled vocabulary) which includes a code for the object.
     *
     * @var string
     */
    protected $scheme;

    /**
     * The code for the object in a scheme (= controlled vocabulary) which is identified by the scheme property.
     *
     * @var string
     */
    protected $code;
}