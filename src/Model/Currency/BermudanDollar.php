<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BermudanDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'BMD';
	private string $name = 'Bermudan Dollar';
	private string $number = '48';
}
