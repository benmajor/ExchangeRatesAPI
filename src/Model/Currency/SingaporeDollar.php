<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SingaporeDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'SGD';
	private string $name = 'Singapore Dollar';
	private string $number = '702';
}
