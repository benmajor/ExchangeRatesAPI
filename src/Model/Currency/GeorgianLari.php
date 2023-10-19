<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GeorgianLari extends Currency implements CurrencyInterface
{
	public const CODE = 'GEL';
	private string $name = 'Georgian Lari';
	private string $number = '981';
}
