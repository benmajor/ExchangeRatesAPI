<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class Euro extends Currency implements CurrencyInterface
{
	public const CODE = 'EUR';
	private string $name = 'Euro';
	private string $number = '978';
	private string $symbol = '€';
}
