<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CanadianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'CAD';
	private string $name = 'Canadian Dollar';
	private string $number = '124';
	private string $symbol = '$';
}
