<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ManxPound extends Currency implements CurrencyInterface
{
	public const CODE = 'IMP';
	private string $name = 'Manx Pound';
	private string $number = '826';
	private string $symbol = '£';
}
