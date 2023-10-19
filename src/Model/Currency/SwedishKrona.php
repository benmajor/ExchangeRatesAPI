<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SwedishKrona extends Currency implements CurrencyInterface
{
	public const CODE = 'SEK';
	private string $name = 'Swedish Krona';
	private string $number = '752';
}
