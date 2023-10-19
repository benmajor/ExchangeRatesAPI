<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class PanamanianBalboa extends Currency implements CurrencyInterface
{
	public const CODE = 'PAB';
	private string $name = 'Panamanian Balboa';
	private string $number = '590';
}
