<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class QatariRial extends Currency implements CurrencyInterface
{
	public const CODE = 'QAR';
	private string $name = 'Qatari Rial';
	private string $number = '634';
}
