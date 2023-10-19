<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GambianDalasi extends Currency implements CurrencyInterface
{
	public const CODE = 'GMD';
	private string $name = 'Gambian Dalasi';
	private string $number = '270';
}
