<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class GhanaianCedi extends Currency implements CurrencyInterface
{
	public const CODE = 'GHS';
	private string $name = 'Ghanaian Cedi';
	private string $number = '936';
}
