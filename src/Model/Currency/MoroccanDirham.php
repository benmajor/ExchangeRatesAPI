<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MoroccanDirham extends Currency implements CurrencyInterface
{
	public const CODE = 'MAD';
	private string $name = 'Moroccan Dirham';
	private string $number = '504';
}
