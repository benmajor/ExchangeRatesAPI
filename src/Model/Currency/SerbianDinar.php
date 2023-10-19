<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SerbianDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'RSD';
	private string $name = 'Serbian Dinar';
	private string $number = '941';
}
