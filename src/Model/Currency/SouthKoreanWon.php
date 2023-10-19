<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SouthKoreanWon extends Currency implements CurrencyInterface
{
	public const CODE = 'KRW';
	private string $name = 'South Korean Won';
	private string $number = '410';
}
