<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BelarusianRubleHistoric extends Currency implements CurrencyInterface
{
	public const CODE = 'BYR';
	private string $name = 'Belarusian Ruble';
	private string $number = '933';
}
