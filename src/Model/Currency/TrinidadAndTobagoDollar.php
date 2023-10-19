<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class TrinidadAndTobagoDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'TTD';
	private string $name = 'Trinidad and Tobago Dollar';
	private string $number = '780';
}
