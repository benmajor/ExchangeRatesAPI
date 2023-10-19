<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class OmaniRial extends Currency implements CurrencyInterface
{
	public const CODE = 'OMR';
	private string $name = 'Omani Rial';
	private string $number = '512';
}
