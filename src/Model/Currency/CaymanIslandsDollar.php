<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CaymanIslandsDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'KYD';
	private string $name = 'Cayman Islands Dollar';
	private string $number = '136';
}
