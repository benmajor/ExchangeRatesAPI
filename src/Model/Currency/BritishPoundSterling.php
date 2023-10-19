<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BritishPoundSterling extends Currency implements CurrencyInterface
{
	public const CODE = 'GBP';
	private string $name = 'British Pound Sterling';
	private string $number = '826';
	private string $symbol = '£';
}
