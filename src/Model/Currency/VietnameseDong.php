<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class VietnameseDong extends Currency implements CurrencyInterface
{
	public const CODE = 'VND';
	private string $name = 'Vietnamese Dong';
	private string $number = '704';
}
