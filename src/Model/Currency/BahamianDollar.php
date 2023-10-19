<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BahamianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'BSD';
	private string $name = 'Bahamian Dollar';
	private string $number = '36';
}
