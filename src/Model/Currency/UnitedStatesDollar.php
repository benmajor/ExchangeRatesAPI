<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class UnitedStatesDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'USD';
	private string $name = 'United States Dollar';
	private string $number = '840';
	private string $symbol = '$';
}
