<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class DominicanPeso extends Currency implements CurrencyInterface
{
	public const CODE = 'DOP';
	private string $name = 'Dominican Peso';
	private string $number = '214';
}
