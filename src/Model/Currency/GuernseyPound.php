<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GuernseyPound extends Currency implements CurrencyInterface
{
	public const CODE = 'GGP';
	private string $name = 'Guernsey Pound';
	private string $number = '826';
	private string $symbol = '£';
}
