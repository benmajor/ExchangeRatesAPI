<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

interface CurrencyInterface
{
    public function getCode(): string;
    public function getName(): string;
    public function getNumber(): ?string;
    public function getSymbol(): ?string;
}
