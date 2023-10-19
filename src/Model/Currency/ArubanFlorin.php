<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ArubanFlorin extends Currency implements CurrencyInterface
{
	public const CODE = 'AWG';
	private string $name = 'Aruban Florin';
	private string $number = '533';
}
