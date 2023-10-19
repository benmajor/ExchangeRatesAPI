<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class PakistaniRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'PKR';
	private string $name = 'Pakistani Rupee';
	private string $number = '586';
}
