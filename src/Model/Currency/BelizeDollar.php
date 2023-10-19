<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BelizeDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'BZD';
	private string $name = 'Belize Dollar';
	private string $number = '084';
}
