<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ThaiBaht extends Currency implements CurrencyInterface
{
	public const CODE = 'THB';
	private string $name = 'Thai Baht';
	private string $number = '764';
}
