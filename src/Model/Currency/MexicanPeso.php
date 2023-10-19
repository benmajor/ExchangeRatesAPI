<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MexicanPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'MXN';
	private string $name = 'Mexican Peso';
	private string $number = '484';
}
