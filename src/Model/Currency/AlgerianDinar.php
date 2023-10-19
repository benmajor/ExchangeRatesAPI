<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class AlgerianDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'DZD';
	private string $name = 'Algerian Dinar';
	private string $number = '10';
}
