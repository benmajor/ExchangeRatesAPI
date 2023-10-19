<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CubanPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'CUP';
	private string $name = 'Cuban Peso';
	private string $number = '192';
}
