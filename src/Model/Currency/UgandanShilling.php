<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class UgandanShilling extends Currency implements CurrencyInterface
{
	public const CODE = 'UGX';
	private string $name = 'Ugandan Shilling';
	private string $number = '800';
}
