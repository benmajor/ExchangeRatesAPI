<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CongoleseFranc extends Currency implements CurrencyInterface
{
	public const CODE = 'CDF';
	private string $name = 'Congolese Franc';
	private string $number = '976';
}
