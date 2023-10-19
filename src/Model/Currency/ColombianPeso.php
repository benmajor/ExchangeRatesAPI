<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ColombianPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'COP';
	private string $name = 'Colombian Peso';
	private string $number = '170';
}
