# ExchangeRatesAPI - Currency Exchange Rates API SDK

[![Latest Version](https://img.shields.io/packagist/v/benmajor/exchange-rates-api.svg?style=flat-square)](https://packagist.org/packages/benmajor/exchange-rates-api)
[![Packagist](https://img.shields.io/packagist/dm/benmajor/exchange-rates-api.svg)](https://packagist.org/packages/benmajor/exchange-rates-api)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)


This is an unofficial wrapper for the awesome, free [ExchangeRatesAPI](https://exchangeratesapi.io/), which provides exchange rate lookups courtesy of the [Central European Bank](https://www.ecb.europa.eu/stats/policy_and_exchange_rates/euro_reference_exchange_rates/html/index.en.html). It features a number of useful functions and can be installed easily using [Composer](https://getcomposer.org/).

## Table of Contents:

1. [Version History](#1-version-history)
2. [Installation](#2-installation)
3. [Getting Started](#3-getting-started)
4. [API Reference](#4-api-reference)
5. [Supported Currencies](#5-supported-currencies)
6. [Requirements](#6-requirements)
7. [Bugs & Features](#7-bugs-features)
8. [License](#8-license)

---

### 1. Version History:

+ **Version 1.0.0** (2019-01-30):
  + The library was officially launched and added to Github, Packagist and Composer. 

### 2. Installation:

The easiest installation method is to use Composer:

```
$ composer require benmajor/exchange-rates-api
```

Alternatively, you can download all files from the `src/` directory and include them in your project. **Important note:** if you're manually installing the SDK, you must also install [Guzzle Client](https://github.com/guzzle/guzzle).

### 3. Getting Started:

Since the CurrencyExchangeAPI does not require API keys or authentication in order to access and interrogate its API, getting started with this library is easy. The following examples show how to achieve various functions using the library.


**Basic usage:**<br />
Fetch the latest exchange rates from the European Central Bank:

```
use \BenMajor\ExchangeRatesAPI\ExchangeRatesAPI;
use \BenMajor\ExchangeRatesAPI\Response;
use \BenMajor\ExchangeRatesAPI\Exception;

$lookup = new ExchangeRatesAPI();
$rates  = $lookup->fetch();
```

**Historical data:**<br />
Get historical rates for any day since 1999:

```
$lookup = new ExchangeRatesAPI();
$rates  = $lookup->addDateFrom('2015-01-20')->fetch();
```

**Set the base currency:**<br />
By default, the base currency is set to Euro (EUR), but it can be changed: 

```
$lookup = new ExchangeRatesAPI();
$rates  = $lookup->setBaseCurrency('GBP')->fetch();
```

**Fetch specific rates:**<br />
If you do not want all current rates, it's possible to specify only the currencies you want using `addRate()`. The following code fetches only the exchange rate between GBP and EUR:

```
$lookup = new ExchangeRatesAPI();
$rates  = $lookup->addRate('EUR')->setBaseCurrency('GBP')->fetch();
```

Please refer to the [API website](https://exchangeratesapi.io/) for further information and full API docs.

**Please note:** By default, the `fetch()` method will return a new `ExchangeRatesAPI\Response` object. However, by passing a single argument of `true` to the `fetch()` method, you can retrieve a raw JSON resposne instead.

### 4. API Reference:

The following API reference lists the publicly-available methods for the 

#### `ExchangeRatesAPI` Reference:

`addDateFrom( string $from )`:<br />
Set the date from which to retrieve historic rates. `$from` should be a string containing an ISO 8601 date.

`getDateFrom()`:<br />
Returns the specified date from which to retrieve historic rates. Returns `null` if none is specified.

`removeDateFrom()`:<br />
Removes the specified start date for the retrieval of historic rates.

`addDateTo( string $to )`:<br />
Set the end date for the retrieval of historic rates. `$to` should be a string containing an ISO 8601 date.

`getDateTo()`:<br />
Returns the specified end date for the retrieval of historic rates. Returns `null` if none is specified.

`removeDateTo()`:<br />
Removes the specified end date for the retrieval of historic rates.

`currencyIsSupported( string $code )`:<br />
Checks if a specific currency code is supported. `$code` should be passed as an ISO 4217 code (e.g. `EUR`).<br />
Returns `true` if supported, or `false` if not.

`setBaseCurrency( string $code )`:<br />
Set the base currency to be used for exchange rates. `$code` should be passed an ISO 4217 code (e.g. `EUR`).<br />
`$code` must be one of the [supported currency codes](#5-supported-currencies).

`getBaseCurrency()`:<br />
Returns the currently specified base currency. If `setBaseCurrency()` hasn't been called, this will return the default base currency `EUR`.

`addRates( array $codes )`:<br />
Adds multiple currencies to be retrieved. `$codes` should be an array of ISO 4217 codes (e.g. `["EUR", "GBP", "BGN"]`).<br />
Each code in the array must be of the [supported currency codes](#5-supported-currencies).<br />
 
`addRate( string $code )`:<br />
Adds a new currency to be retrieved. `$code` should be passed an ISO 4217 code (e.g. `EUR`).<br />
`$code` must be one of the [supported currency codes](#5-supported-currencies).<br />
If no rates are added, **all** rates will be returned.

`removeRates( array $codes )`:<br />
Removes multiple currencies that has already been added to the retrieval list.  `$codes` should be an array of ISO 4217 codes (e.g. `["EUR", "GBP", "BGN"]`).<br />
`$code` must be one of the [supported currency codes](#5-supported-currencies).

`removeRate( string $code )`:<br />
Removes a currency that has already been added to the retrieval list.  `$code` should be passed an ISO 4217 code (e.g. `EUR`).<br />
`$code` must be one of the [supported currency codes](#5-supported-currencies).

`fetch( bool $returnJSON = false, bool $parseJSON = true )`:<br />
Send off the request to the API and return either a `Response` object, or the raw JSON response. If `$returnJSON` is set to `true`, a standard PHP object will be returned, rather than the `ExchangeRatesAPI\Response` object. 

`convert( string $to, float $amount, int $rounding )`:<br />
A convenience function to combine several methods in order to quickly perform a currency conversion:

`$to`: should be specified as the ISO 4217 currency code to convert to.<br />
`$amount`: the amount to be converted.<br />
`$rounding`: the amount to round the conversion. Default is `2`.

This method call will return the converted currency amount in `$to` from the specified based currency. 

`getSupportedCurrencies( string $concat = null )`:<br />
Returns a list of supported currency codes. If `$concat` is `null`, an array of currency codes is returned. If `$concat` is specified as a string, a string will be returned, joined by `$concat`.

`getRates( string $concat = null )`:<br />
Returns a list of the currently specified rates to retrieve. If `$concat` is `null`, an array of currency codes is returned. If `$concat` is specified as a string, a string will be returned, joined by `$concat`.

#### `Response` Reference:

This is the default object that is returned from the `fetch()`. Here is a list of the available methods on the `Response` object:

`getStatusCode()`:<br />
Returns the status code of the request (generally `200`).

`getTimestamp()`:<br />
Returns the timestamp (formatted in ISO 8601 notation) the response was generated.

`getBaseCurrency()`:<br />
Returns the base currency of the request. If not base currency was specified using `setBaseCurrency` on the request, this will return the default (`EUR`).

`getRates()`:<br />
Returns a key/value pair array of the exchange rates that match against the request, for example:

```
[ 'GBP' => 1, 'EUR' => 1.1 ]
```

`getRate( string $code )`:<br />
Retrieves the exchange rate for a specific currency, or returns the exchange rate if only one rate is present in the response. 

### 5. Supported Currencies:

The library supports any currency currently available on the European Central Bank's web service, which at the time of the latest release are as follows:

![](https://www.ecb.europa.eu/shared/img/flags/AUD.gif) Australian Dollar (AUD)<br />
![](https://www.ecb.europa.eu/shared/img/flags/BRL.gif) Brazilian Real (BRL)<br />
![](https://www.ecb.europa.eu/shared/img/flags/GBP.gif) British Pound Sterline (GBP)<br />
![](https://www.ecb.europa.eu/shared/img/flags/BGN.gif) Bulgarian Lev (BGN)<br />
![](https://www.ecb.europa.eu/shared/img/flags/CAD.gif) Canadian Dollar (CAD)<br />
![](https://www.ecb.europa.eu/shared/img/flags/CNY.gif) Chinese Yuan Renminbi (CNY)<br />
![](https://www.ecb.europa.eu/shared/img/flags/HRK.gif) Croatian Kuna (HRK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/CZK.gif) Czech Koruna (CZK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/DKK.gif) Danish Krone (DKK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/EUR.gif) Euro (EUR)<br />
![](https://www.ecb.europa.eu/shared/img/flags/HKD.gif) Hong Kong Dollar (HKD)<br />
![](https://www.ecb.europa.eu/shared/img/flags/HUF.gif) Hungarian Forint (HUF)<br />
![](https://www.ecb.europa.eu/shared/img/flags/ISK.gif) Icelandic Krona (ISK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/IDR.gif) Indonesian Rupiah (IDR)<br />
![](https://www.ecb.europa.eu/shared/img/flags/INR.gif) Indian Rupee (INR)<br />
![](https://www.ecb.europa.eu/shared/img/flags/ILS.gif) Israeli Shekel (ILS)<br />
![](https://www.ecb.europa.eu/shared/img/flags/JPY.gif) Japanese Yen (JPY)<br />
![](https://www.ecb.europa.eu/shared/img/flags/MYR.gif) Malaysian Ringgit (MYR)<br />
![](https://www.ecb.europa.eu/shared/img/flags/MXN.gif) Mexican Peso (MXN)<br />
![](https://www.ecb.europa.eu/shared/img/flags/NZD.gif) New Zealand Dollar (NZD)<br />
![](https://www.ecb.europa.eu/shared/img/flags/NOK.gif) Norwegian Krone (NOK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/PHP.gif) Philippine Peso (PHP)<br />
![](https://www.ecb.europa.eu/shared/img/flags/PLN.gif) Polish Zloty (PLN)<br />
![](https://www.ecb.europa.eu/shared/img/flags/RON.gif) Romanian Leu (RON)<br />
![](https://www.ecb.europa.eu/shared/img/flags/RUB.gif) Russian Rouble (RUB)<br />
![](https://www.ecb.europa.eu/shared/img/flags/SGD.gif) Singapore Dollar (SGD)<br />
![](https://www.ecb.europa.eu/shared/img/flags/ZAR.gif) South African Rand (ZAR)<br />
![](https://www.ecb.europa.eu/shared/img/flags/KRW.gif) South Korean Won (KRW)<br />
![](https://www.ecb.europa.eu/shared/img/flags/SEK.gif) Swedish Krona (SEK)<br />
![](https://www.ecb.europa.eu/shared/img/flags/CHF.gif) Swiss Franc (CHF)<br />
![](https://www.ecb.europa.eu/shared/img/flags/THB.gif) Thai Baht (THB)<br />
![](https://www.ecb.europa.eu/shared/img/flags/TRY.gif) Turkish Lira (TRY)<br />
![](https://www.ecb.europa.eu/shared/img/flags/USD.gif) US Dollar (USD)<br />

### 6. Requirements:

This library requires PHP >= 7.0. No other platform requirements exist, but the library is dependent on [Guzzle](https://github.com/guzzle/guzzle).


### 7. Bugs & Features:

If you have spotted any bugs, or would like to request additional features from the library, please file an issue via the Issue Tracker on the project's Github page: [https://github.com/benmajor/ExchangeRatesAPI/issues](https://github.com/benmajor/ExchangeRatesAPI/issues).

### 8. License:

Licensed under the **MIT License**:

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

(c) Copyright Ben Major, 2019.
