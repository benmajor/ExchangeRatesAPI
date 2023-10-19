<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class HongKongDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'HKD';
	private string $name = 'Hong Kong Dollar';
	private string $number = '344';
}
