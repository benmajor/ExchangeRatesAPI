<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class JamaicanDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'JMD';
	private string $name = 'Jamaican Dollar';
	private string $number = '388';
	private string $symbol = '$';
}
