<?php

namespace BenMajor\ExchangeRatesApi\Response;

use BenMajor\ExchangeRatesApi\Exception\UnsupportedCurrencyException;
use BenMajor\ExchangeRatesApi\Model\Currency\CurrencyInterface;
use BenMajor\ExchangeRatesApi\Model\Rate;
use BenMajor\ExchangeRatesApi\Repository\CurrencyRepository;
use DateTimeImmutable;
use Generator;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

class Response
{
    /** @var array<string, array> $body */
    private array $body;

    /** @var DateTimeImmutable $timestamp */
    private DateTimeImmutable $timestamp;

    /** @var CurrencyInterface $baseCurrency */
    private CurrencyInterface $baseCurrency;

    public function __construct(GuzzleResponse $response)
    {
        $this->body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        $this->timestamp = new DateTimeImmutable();
        $this->timestamp->setTimestamp($this->body['timestamp']);

        $this->baseCurrency = (new CurrencyRepository())->findOneByCode($this->body['source']);
    }

    /**
     * Get the raw response body
     *
     * @return array
     */
    public function getRaw(): array
    {
        return $this->body;
    }

    /**
     * Get the timestamp of the response
     *
     * @return DateTimeImmutable
     */
    public function getTimestamp(): DateTimeImmutable
    {
        return $this->timestamp;
    }

    /**
     * Get all of the exchange rates
     *
     * @return Generator|Rate[]
     */
    public function getRates(): Generator
    {
        $repo = new CurrencyRepository();

        foreach ($this->body['quotes'] as $key => $rate) {
            $source = substr($key, 0, 3);
            $destination = substr($key, 3);

            $target = $repo->findOneByCode($destination);

            if ($target === null) {
                throw new UnsupportedCurrencyException(
                    sprintf('The specified currency code (%s) is not currently supported by the SDK.', $destination)
                );
            }

            yield new Rate(
                $this->baseCurrency,
                $target,
                $rate
            );
        }
    }

    /**
     * Get the exchange rate for a given currency
     *
     * @param string|CurrencyInterface $currency
     * @return Rate
     */
    public function getRate(string|CurrencyInterface $currency): Rate
    {
        $repo = new CurrencyRepository();

        if (is_string($currency) === true) {
            $currency = $repo->findOneByCode($currency);
        }

        if ($currency->getCode() === $this->baseCurrency->getCode()) {
            $rate = 1;
        }
        else {
            $key = sprintf('%s%s', $this->baseCurrency->getCode(), $currency->getCode());
            $rate = $this->body['quotes'][$key];
        }

        return new Rate(
            $this->baseCurrency,
            $currency,
            $rate
        );
    }
}
