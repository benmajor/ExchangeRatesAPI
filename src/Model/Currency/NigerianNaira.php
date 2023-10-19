<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class NigerianNaira extends Currency implements CurrencyInterface
{
	public const CODE = 'NGN';
	private string $name = 'Nigerian Naira';
	private string $number = '566';
}
