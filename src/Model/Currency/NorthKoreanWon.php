<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NorthKoreanWon extends Currency implements CurrencyInterface
{
	public const CODE = 'KPW';
	private string $name = 'North Korean Won';
	private string $number = '408';
}
