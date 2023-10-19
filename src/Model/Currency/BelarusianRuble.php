<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BelarusianRuble extends Currency implements CurrencyInterface
{
	public const CODE = 'BYN';
	private string $name = 'Belarusian Ruble';
	private string $number = '933';
}
