<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CfpFranc extends Currency implements CurrencyInterface
{
	public const CODE = 'XPF';
	private string $name = 'CFP Franc';
	private string $number = '953';
}
