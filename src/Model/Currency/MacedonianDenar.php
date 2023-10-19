<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MacedonianDenar extends Currency implements CurrencyInterface
{
	public const CODE = 'MKD';
	private string $name = 'Macedonian Denar';
	private string $number = '807';
}
