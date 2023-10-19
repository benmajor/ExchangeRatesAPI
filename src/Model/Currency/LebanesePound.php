<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class LebanesePound extends Currency implements CurrencyInterface
{
	public const CODE = 'LBP';
	private string $name = 'Lebanese Pound';
	private string $number = '422';
}
