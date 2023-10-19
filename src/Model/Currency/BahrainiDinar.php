<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class BahrainiDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'BHD';
	private string $name = 'Bahraini Dinar';
	private string $number = '048';
}
