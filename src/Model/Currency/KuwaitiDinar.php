<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class KuwaitiDinar extends Currency implements CurrencyInterface
{
	public const CODE = 'KWD';
	private string $name = 'Kuwaiti Dinar';
	private string $number = '414';
}
