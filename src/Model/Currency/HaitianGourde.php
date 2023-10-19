<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class HaitianGourde extends Currency implements CurrencyInterface
{
	public const CODE = 'HTG';
	private string $name = 'Haitian Gourde';
	private string $number = '332';
}
