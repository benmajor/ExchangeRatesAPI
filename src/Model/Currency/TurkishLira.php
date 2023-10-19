<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class TurkishLira extends Currency implements CurrencyInterface
{
	public const CODE = 'TRY';
	private string $name = 'Turkish Lira';
	private string $number = '949';
}
