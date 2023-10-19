<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class PolishZloty extends Currency implements CurrencyInterface
{
	public const CODE = 'PLN';
	private string $name = 'Polish Zloty';
	private string $number = '985';
}
