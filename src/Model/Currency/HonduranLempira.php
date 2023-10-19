<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class HonduranLempira extends Currency implements CurrencyInterface
{
	public const CODE = 'HNL';
	private string $name = 'Honduran Lempira';
	private string $number = '340';
}
