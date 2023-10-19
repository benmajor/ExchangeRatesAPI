<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MalaysianRinggit extends Currency implements CurrencyInterface
{
	public const CODE = 'MYR';
	private string $name = 'Malaysian Ringgit';
	private string $number = '458';
}
