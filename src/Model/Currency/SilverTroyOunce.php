<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SilverTroyOunce extends Currency implements CurrencyInterface
{
	public const CODE = 'XAG';
	private string $name = 'Silver (troy ounce)';
}
