<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class TanzanianShilling extends Currency implements CurrencyInterface
{
	public const CODE = 'TZS';
	private string $name = 'Tanzanian Shilling';
	private string $number = '834';
}
