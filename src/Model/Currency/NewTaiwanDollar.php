<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NewTaiwanDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'TWD';
	private string $name = 'New Taiwan Dollar';
	private string $number = '901';
}
