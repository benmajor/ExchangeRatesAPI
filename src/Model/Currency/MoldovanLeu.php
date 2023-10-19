<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MoldovanLeu extends Currency implements CurrencyInterface
{
	public const CODE = 'MDL';
	private string $name = 'Moldovan Leu';
	private string $number = '498';
}
