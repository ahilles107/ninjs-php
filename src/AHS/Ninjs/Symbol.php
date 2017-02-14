<?php

declare(strict_types = 1);

namespace AHS\Ninjs;

final class Symbol
{
    /**
     * Ticker symbol used for the financial instrument.
     *
     * @var string
     */
    protected $ticker;

    /**
     * Identifier for the marketplace which uses the ticker symbols of the ticker property.
     *
     * @var string
     */
    protected $exchange;

    /**
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * @param string $ticker
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
    }

    /**
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     * @param string $exchange
     */
    public function setExchange($exchange)
    {
        $this->exchange = $exchange;
    }
}