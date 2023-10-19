<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class AustralianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'AUD';
	private string $name = 'Australian Dollar';
	private string $number = '30';
	private string $symbol = '$';
}
