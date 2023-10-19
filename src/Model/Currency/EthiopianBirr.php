<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class EthiopianBirr extends Currency implements CurrencyInterface
{
	public const CODE = 'ETB';
	private string $name = 'Ethiopian Birr';
	private string $number = '230';
}
