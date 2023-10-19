<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class PhilippinePeso extends Currency implements CurrencyInterface
{
	public const CODE = 'PHP';
	private string $name = 'Philippine Peso';
	private string $number = '608';
}
