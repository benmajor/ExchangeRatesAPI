<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MyanmaKyat extends Currency implements CurrencyInterface
{
	public const CODE = 'MMK';
	private string $name = 'Myanma Kyat';
	private string $number = '104';
}
