<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SurinameseDollar extends Currency implements CurrencyInterface
{
	public const CODE = 'SRD';
	private string $name = 'Surinamese Dollar';
	private string $number = '968';
}
