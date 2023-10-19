<?php

namespace BenMajor\ExchangeRatesApi;

use BenMajor\ExchangeRatesApi\Model\Currency\CurrencyInterface;
use BenMajor\ExchangeRatesApi\Exception\LookupException;
use BenMajor\ExchangeRatesApi\Response\Response;
use DateTimeInterface;
use GuzzleHttp\Client as GuzzleClient;
use Throwable;

class Client
{
    public const API_URL = 'api.exchangerate.host';

    /** @var bool $useSsl */
    private bool $useSsl;

    /** @var string $accessKey */
    private string $accessKey;

    /** @var GuzzleClient $client */
    private GuzzleClient $client;

    /** @var DateTimeInterface|null $from */
    private ?DateTimeInterface $startDate = null;

    /** @var DateTimeInterface|null $to */
    private ?DateTimeInterface $endDate = null;

    /** @var CurrencyInterface|null $baseCurrency */
    private ?CurrencyInterface $baseCurrency = null;

    /** Endpoints: */
    private const ENDPOINT_LIVE = 'live';
    private const ENDPOINT_HISTORIC = 'historical';
    private const ENDPOINT_SNAPSHOT = 'timeframe';
    private const ENDPOINT_CONVERT = 'convert';
    private const FORMAT_DATE = 'Y-m-d';

    public function __construct(string $accessKey, bool $useSsl = false)
    {
        $this->accessKey = $accessKey;
        $this->useSsl = $useSsl;

        $this->client = new GuzzleClient([
            'base_uri' => $this->getBaseUrl()
        ]);
    }

    /**
     * Set the API access key
     *
     * @param string $accessKey
     * @return self
     */
    public function setAccessKey(string $accessKey): self
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Define whether requests should use SSL
     *
     * @param bool $useSsl
     * @return self
     */
    public function setUseSsl(bool $useSsl): self
    {
        $this->useSsl = $useSsl;

        return $this;
    }

    /**
     * Check whether requests should be sent using SSL
     *
     * @return bool
     */
    public function shouldUseSsl(): bool
    {
        return $this->useSsl;
    }

    /**
     * Set the date from which the rates should be returned.
     *
     * @param DateTimeInterface $date
     * @return self
     */
    public function since(DateTimeInterface $date): self
    {
        $this->startDate = $date;

        return $this;
    }

    /**
     * Set the date to which the rates should be fetched.
     *
     * @param DateTimeInterface $date
     * @return self
     */
    public function to(DateTimeInterface $date): self
    {
        $this->endDate = $date;

        return $this;
    }

    /**
     * Set the base currency for the exchange rate
     *
     * @param CurrencyInterface $baseCurrency
     * @return self
     */
    public function from(CurrencyInterface $baseCurrency): self
    {
        $this->baseCurrency = $baseCurrency;

        return $this;
    }

    /**
     * Fetch a list of rates for the given params
     *
     * @param array<int, CurrencyInterface> $currencies
     * @return Response
     */
    public function fetch(array $currencies = [])
    {
        $endpoint = self::ENDPOINT_LIVE;

        $params = [
            'access_key' => $this->accessKey
        ];

        if ($this->startDate !== null && $this->endDate !== null) {
            $endpoint = self::ENDPOINT_SNAPSHOT;
            $params['start_date'] = $this->startDate->format(self::FORMAT_DATE);
            $params['end_date'] = $this->endDate->format(self::FORMAT_DATE);
        }
        elseif ($this->startDate !== null) {
            $endpoint = self::ENDPOINT_HISTORIC;
            $params['date'] = $this->startDate->format(self::FORMAT_DATE);
        }

        if (empty($currencies) === false) {
            $codes = [];

            foreach ($currencies as $currency) {
                $codes[] = $currency->getCode();
            }

            $params['currencies'] = implode(',', $codes);
        }

        if ($this->baseCurrency !== null) {
            $params['source'] = $this->baseCurrency->getCode();
        }

        // Catch Guzzle errors to throw our own:
        try {
            $rawResponse = $this->client->request('GET', $endpoint, [
                'query' => $params
            ]);

            $response = new Response($rawResponse);

            return $response;
        }
        catch(Throwable $e) {
            throw new LookupException('', 0, $e);
        }
    }

    /**
     * Get the HTTP protocol to use for requests
     *
     * @return string
     */
    private function getProtocol(): string
    {
        return ($this->shouldUseSsl() === true)
            ? 'https'
            : 'http';
    }

    /**
     * Get the API base URL
     *
     * @return string
     */
    private function getBaseUrl(): string
    {
        return sprintf(
            '%s://%s',
            $this->getProtocol(),
            self::API_URL
        );
    }
}
