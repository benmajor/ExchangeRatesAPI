<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ZambianKwacha extends Currency implements CurrencyInterface
{
	public const CODE = 'ZMW';
	private string $name = 'Zambian Kwacha';
	private string $number = '967';
}
