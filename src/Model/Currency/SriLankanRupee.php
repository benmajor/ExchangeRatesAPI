<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SriLankanRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'LKR';
	private string $name = 'Sri Lankan Rupee';
	private string $number = '144';
}
