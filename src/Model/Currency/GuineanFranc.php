<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GuineanFranc extends Currency implements CurrencyInterface
{
	public const CODE = 'GNF';
	private string $name = 'Guinean Franc';
	private string $number = '324';
}
