<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs;

final class Organization
{
    /**
     * The name of the organisation.
     *
     * @var string
     */
    private $name;

    /**
     * The relationship of the content of the news object to the organisation.
     *
     * @var string
     */
    private $rel;

    /**
     * The identifier of a scheme (= controlled vocabulary) which includes a code for the organisation.
     *
     * @var string
     */
    private $scheme;

    /**
     * The code for the organisation in a scheme (= controlled vocabulary) which is identified by the scheme property.
     *
     * @var string
     */
    private $code;

    /**
     * Symbols used for a finanical instrument linked to the organisation at a specific market place.
     *
     * @var Symbol[]
     */
    private $symbols;

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

    /**
     * @return Symbol[]
     */
    public function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * @param Symbol[] $symbols
     */
    public function setSymbols($symbols)
    {
        $this->symbols = $symbols;
    }
}
