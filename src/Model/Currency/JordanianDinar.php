<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class JordanianDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'JOD';
	private string $name = 'Jordanian Dinar';
	private string $number = '400';
	private string $symbol = 'د.أ';
}
