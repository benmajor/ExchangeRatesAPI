<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MozambicanMetical extends Currency implements CurrencyInterface
{
	public const CODE = 'MZN';
	private string $name = 'Mozambican Metical';
	private string $number = '943';
}
