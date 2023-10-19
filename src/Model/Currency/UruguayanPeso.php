<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class UruguayanPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'UYU';
	private string $name = 'Uruguayan Peso';
	private string $number = '858';
}
