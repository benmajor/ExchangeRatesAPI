<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MongolianTugrik extends Currency implements CurrencyInterface
{
	public const CODE = 'MNT';
	private string $name = 'Mongolian Tugrik';
	private string $number = '496';
}
