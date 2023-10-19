<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IndianRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'INR';
	private string $name = 'Indian Rupee';
	private string $number = '356';
}
