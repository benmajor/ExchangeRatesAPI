<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CostaRicanColon extends Currency implements CurrencyInterface
{
	public const CODE = 'CRC';
	private string $name = 'Costa Rican Colón';
	private string $number = '188';
}
