<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BarbadianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'BBD';
	private string $name = 'Barbadian Dollar';
	private string $number = '42';
}
