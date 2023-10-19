<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CfaFrancBeac extends Currency implements CurrencyInterface
{
	public const CODE = 'XAF';
	private string $name = 'CFA Franc BEAC';
	private string $number = '950';
}
