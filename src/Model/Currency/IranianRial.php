<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IranianRial extends Currency implements CurrencyInterface
{
	public const CODE = 'IRR';
	private string $name = 'Iranian Rial';
	private string $number = '364';
}
