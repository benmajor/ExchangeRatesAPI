<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class MauritianRupee extends Currency implements CurrencyInterface
{
	public const CODE = 'MUR';
	private string $name = 'Mauritian Rupee';
	private string $number = '480';
}
