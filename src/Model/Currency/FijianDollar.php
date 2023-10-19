<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class FijianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'FJD';
	private string $name = 'Fijian Dollar';
	private string $number = '242';
}
