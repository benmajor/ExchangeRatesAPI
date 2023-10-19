<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BruneiDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'BND';
	private string $name = 'Brunei Dollar';
	private string $number = '096';
}
