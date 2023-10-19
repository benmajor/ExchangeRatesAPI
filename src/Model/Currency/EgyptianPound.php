<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class EgyptianPound extends Currency implements CurrencyInterface
{
	public const CODE = 'EGP';
	private string $name = 'Egyptian Pound';
	private string $number = '818';
}
