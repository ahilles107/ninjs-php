<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs;

final class Object
{
    /**
     * The name of the object.
     *
     * @var string
     */
    private $name;

    /**
     * The relationship of the content of the news object to the object.
     *
     * @var string
     */
    private $rel;

    /**
     * The identifier of a scheme (= controlled vocabulary) which includes a code for the object.
     *
     * @var string
     */
    private $scheme;

    /**
     * The code for the object in a scheme (= controlled vocabulary) which is identified by the scheme property.
     *
     * @var string
     */
    private $code;
}
