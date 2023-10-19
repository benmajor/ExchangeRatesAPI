<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ChileanUnitOfAccountUf extends Currency implements CurrencyInterface
{
	public const CODE = 'CLF';
	private string $name = 'Chilean Unit of Account (UF)';
	private string $number = '990';
}
