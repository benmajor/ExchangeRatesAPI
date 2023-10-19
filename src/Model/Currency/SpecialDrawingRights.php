<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class SpecialDrawingRights extends Currency implements CurrencyInterface
{
	public const CODE = 'XDR';
	private string $name = 'Special Drawing Rights';
	private string $number = '960';
}
