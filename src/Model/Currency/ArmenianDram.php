<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class ArmenianDram extends Currency implements CurrencyInterface
{
	public const CODE = 'AMD';
	private string $name = 'Armenian Dram';
	private string $number = '41';
}
