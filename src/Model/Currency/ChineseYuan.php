<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ChineseYuan extends Currency implements CurrencyInterface
{
	public const CODE = 'CNY';
	private string $name = 'Chinese Yuan';
	private string $number = '156';
}
