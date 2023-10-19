<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class Currency implements CurrencyInterface
{
    private string $name = 'BaseCurrency';
    private ?string $number = null;
    private ?string $symbol = null;

    public function getCode(): string
    {
        return $this::CODE;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }
}
