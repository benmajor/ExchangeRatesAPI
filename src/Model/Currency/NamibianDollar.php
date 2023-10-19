<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NamibianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'NAD';
	private string $name = 'Namibian Dollar';
	private string $number = '516';
}
