<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NorwegianKrone extends Currency implements CurrencyInterface
{
	public const CODE = 'NOK';
	private string $name = 'Norwegian Krone';
	private string $number = '578';
}
