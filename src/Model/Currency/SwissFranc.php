<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SwissFranc extends Currency implements CurrencyInterface
{
	public const CODE = 'CHF';
	private string $name = 'Swiss Franc';
	private string $number = '756';
}
