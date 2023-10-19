<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class LibyanDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'LYD';
	private string $name = 'Libyan Dinar';
	private string $number = '434';
}
