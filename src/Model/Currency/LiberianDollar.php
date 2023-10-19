<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class LiberianDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'LRD';
	private string $name = 'Liberian Dollar';
	private string $number = '430';
}
