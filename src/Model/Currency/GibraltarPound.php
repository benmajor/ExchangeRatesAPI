<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GibraltarPound extends Currency implements CurrencyInterface
{
	public const CODE = 'GIP';
	private string $name = 'Gibraltar Pound';
	private string $number = '292';
	private string $symbol = '£';
}
