<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class IndonesianRupiah extends Currency implements CurrencyInterface
{
	public const CODE = 'IDR';
	private string $name = 'Indonesian Rupiah';
	private string $number = '360';
}
