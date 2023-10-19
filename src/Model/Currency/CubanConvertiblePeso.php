<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CubanConvertiblePeso extends Currency implements CurrencyInterface
{
	public const CODE = 'CUC';
	private string $name = 'Cuban Convertible Peso';
	private string $number = '931';
}
