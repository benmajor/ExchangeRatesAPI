<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IcelandicKrona extends Currency implements CurrencyInterface
{
	public const CODE = 'ISK';
	private string $name = 'Icelandic Króna';
	private string $number = '352';
}
