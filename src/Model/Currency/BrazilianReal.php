<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BrazilianReal extends Currency implements CurrencyInterface
{
	public const CODE = 'BRL';
	private string $name = 'Brazilian Real';
	private string $number = '986';
}
