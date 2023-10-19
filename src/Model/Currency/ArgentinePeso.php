<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ArgentinePeso extends Currency implements CurrencyInterface
{
	public const CODE = 'ARS';
	private string $name = 'Argentine Peso';
	private string $number = '26';
}
