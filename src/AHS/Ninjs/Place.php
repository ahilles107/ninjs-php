<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs;

/**
 * An object holding geo data of this place. Could be of any relevant geo data JSON object definition.
 */
final class Place
{
    /**
     * The name of the place.
     *
     * @var string
     */
    protected $name;

    /**
     * The relationship of the content of the news object to the place.
     *
     * @var string
     */
    protected $rel;

    /**
     * The identifier of a scheme (= controlled vocabulary) which includes a code for the place.
     *
     * @var string
     */
    protected $scheme;

    /**
     * The code for the place in a scheme (= controlled vocabulary) which is identified by the scheme property.
     *
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param string $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
}