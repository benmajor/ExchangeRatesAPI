<?php

namespace BenMajor\ExchangeRatesApi\Model\Currency;

class UkrainianHryvnia extends Currency implements CurrencyInterface
{
	public const CODE = 'UAH';
	private string $name = 'Ukrainian Hryvnia';
	private string $number = '980';
}
