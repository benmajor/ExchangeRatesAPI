<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GuatemalanQuetzal extends Currency implements CurrencyInterface
{
	public const CODE = 'GTQ';
	private string $name = 'Guatemalan Quetzal';
	private string $number = '320';
}
