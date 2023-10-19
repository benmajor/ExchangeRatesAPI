<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BulgarianLev extends Currency implements CurrencyInterface
{
	public const CODE = 'BGN';
	private string $name = 'Bulgarian Lev';
	private string $number = '975';
}
