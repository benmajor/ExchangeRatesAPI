<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IraqiDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'IQD';
	private string $name = 'Iraqi Dinar';
	private string $number = '368';
}
