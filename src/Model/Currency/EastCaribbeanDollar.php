<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class EastCaribbeanDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'XCD';
	private string $name = 'East Caribbean Dollar';
	private string $number = '951';
}
