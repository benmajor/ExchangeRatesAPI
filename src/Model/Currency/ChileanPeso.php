<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ChileanPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'CLP';
	private string $name = 'Chilean Peso';
	private string $number = '152';
}
