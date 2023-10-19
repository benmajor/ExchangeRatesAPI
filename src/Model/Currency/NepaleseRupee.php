<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NepaleseRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'NPR';
	private string $name = 'Nepalese Rupee';
	private string $number = '524';
}
