<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NewZealandDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'NZD';
	private string $name = 'New Zealand Dollar';
	private string $number = '554';
}
