<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CfaFrancBceao extends Currency implements CurrencyInterface
{
	public const CODE = 'XOF';
	private string $name = 'CFA Franc BCEAO';
	private string $number = '952';
}
