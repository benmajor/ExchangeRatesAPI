<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class DanishKrone extends Currency implements CurrencyInterface
{
	public const CODE = 'DKK';
	private string $name = 'Danish Krone';
	private string $number = '208';
}
