<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SaudiRiyal extends Currency implements CurrencyInterface
{
	public const CODE = 'SAR';
	private string $name = 'Saudi Riyal';
	private string $number = '682';
}
