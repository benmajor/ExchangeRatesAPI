<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ParaguayanGuarani extends Currency implements CurrencyInterface
{
	public const CODE = 'PYG';
	private string $name = 'Paraguayan Guarani';
	private string $number = '600';
}
