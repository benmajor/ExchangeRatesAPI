<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class PeruvianNuevoSol extends Currency implements CurrencyInterface
{
	public const CODE = 'PEN';
	private string $name = 'Peruvian Nuevo Sol';
	private string $number = '604';
}
