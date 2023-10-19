<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class RomanianLeu extends Currency implements CurrencyInterface
{
	public const CODE = 'RON';
	private string $name = 'Romanian Leu';
	private string $number = '946';
}
