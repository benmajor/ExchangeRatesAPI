<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class JapaneseYen extends Currency implements CurrencyInterface
{
	public const CODE = 'JPY';
	private string $name = 'Japanese Yen';
	private string $number = '392';
	private string $symbol = '';
}
