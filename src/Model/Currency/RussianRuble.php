<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class RussianRuble extends Currency implements CurrencyInterface
{
	public const CODE = 'RUB';
	private string $name = 'Russian Ruble';
	private string $number = '643';
}
