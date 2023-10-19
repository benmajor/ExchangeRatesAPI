<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class JerseyPound extends Currency implements CurrencyInterface
{
	public const CODE = 'JEP';
	private string $name = 'Jersey Pound';
	private string $number = '826';
	private string $symbol = '£';
}
