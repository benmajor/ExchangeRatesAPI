<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IsraeliNewSheqel extends Currency implements CurrencyInterface
{
	public const CODE = 'ILS';
	private string $name = 'Israeli New Sheqel';
	private string $number = '376';
}
