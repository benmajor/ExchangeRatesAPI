<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SomaliShilling extends Currency implements CurrencyInterface
{
	public const CODE = 'SOS';
	private string $name = 'Somali Shilling';
	private string $number = '706';
}
