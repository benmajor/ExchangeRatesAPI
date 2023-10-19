<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CzechRepublicKoruna extends Currency implements CurrencyInterface
{
	public const CODE = 'CZK';
	private string $name = 'Czech Republic Koruna';
	private string $number = '203';
}
