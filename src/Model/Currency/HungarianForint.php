<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class HungarianForint extends Currency implements CurrencyInterface
{
	public const CODE = 'HUF';
	private string $name = 'Hungarian Forint';
	private string $number = '348';
}
