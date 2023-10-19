<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SeychelloisRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'SCR';
	private string $name = 'Seychellois Rupee';
	private string $number = '690';
}
