<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SolomonIslandsDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'SBD';
	private string $name = 'Solomon Islands Dollar';
	private string $number = '090';
}
