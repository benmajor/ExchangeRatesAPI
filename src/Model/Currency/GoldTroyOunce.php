<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GoldTroyOunce extends Currency implements CurrencyInterface
{
	public const CODE = 'XAU';
	private string $name = 'Gold (troy ounce)';
}
