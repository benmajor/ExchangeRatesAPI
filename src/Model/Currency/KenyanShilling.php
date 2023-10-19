<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class KenyanShilling extends Currency implements CurrencyInterface
{
	public const CODE = 'KES';
	private string $name = 'Kenyan Shilling';
	private string $number = '404';
}
