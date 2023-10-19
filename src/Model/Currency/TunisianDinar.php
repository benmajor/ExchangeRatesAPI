<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class TunisianDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'TND';
	private string $name = 'Tunisian Dinar';
	private string $number = '788';
}
