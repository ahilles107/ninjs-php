<?php

declare(strict_types = 1);

namespace AHS\Ninjs;

final class Organization
{
    /**
     * The name of the organisation.
     *
     * @var string
     */
    protected $name;

    /**
     * The relationship of the content of the news object to the organisation.
     *
     * @var string
     */
    protected $rel;

    /**
     * The identifier of a scheme (= controlled vocabulary) which includes a code for the organisation.
     *
     * @var string
     */
    protected $scheme;

    /**
     * The code for the organisation in a scheme (= controlled vocabulary) which is identified by the scheme property.
     *
     * @var string
     */
    protected $code;

    /**
     * Symbols used for a finanical instrument linked to the organisation at a specific market place.
     *
     * @var Symbol[]
     */
    protected $symbols;

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