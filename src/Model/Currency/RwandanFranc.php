<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class RwandanFranc extends Currency implements CurrencyInterface
{
	public const CODE = 'RWF';
	private string $name = 'Rwandan Franc';
	private string $number = '646';
}
