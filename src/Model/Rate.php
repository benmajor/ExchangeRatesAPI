<?php

namespace BenMajor\ExchangeRatesApi\Model;

use BenMajor\ExchangeRatesApi\Model\Currency\CurrencyInterface;

class Rate
{
    /** @var CurrencyInterface $source */
    private CurrencyInterface $source;

    /** @var CurrencyInterface $destination */
    private CurrencyInterface $destination;

    /** @var float $rate */
    private float $rate;

    public function __construct(
        CurrencyInterface $source,
        CurrencyInterface $destination,
        float $rate
    ) {
        $this->source = $source;
        $this->destination = $destination;
        $this->rate = $rate;
    }

    /**
     * Get the source currency entity
     *
     * @return CurrencyInterface
     */
    public function getSource(): CurrencyInterface
    {
        return $this->source;
    }

    /**
     * Get the destination currency entity
     *
     * @return CurrencyInterface
     */
    public function getDestination(): CurrencyInterface
    {
        return $this->destination;
    }

    /**
     * Get the exchange rate (relative to the base rate)
     *
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
}
