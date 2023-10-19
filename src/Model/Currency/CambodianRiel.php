<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class CambodianRiel extends Currency implements CurrencyInterface
{
	public const CODE = 'KHR';
	private string $name = 'Cambodian Riel';
	private string $number = '116';
}
