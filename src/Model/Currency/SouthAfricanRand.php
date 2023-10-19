<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SouthAfricanRand extends Currency implements CurrencyInterface
{
	public const CODE = 'ZAR';
	private string $name = 'South African Rand';
	private string $number = '710';
}
