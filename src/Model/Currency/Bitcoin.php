<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class Bitcoin extends Currency implements CurrencyInterface
{
	public const CODE = 'BTC';
	private string $name = 'Bitcoin';
}
