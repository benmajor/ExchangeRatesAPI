<?PHP

/**
 * A simple SDK wrapper for the ExchangeRatesAPI (https://exchangeratesapi.io/)
 * Written by Ben Major (https://github.com/benmajor)
 *
 * @link      https://github.com/benmajor/PHP-ExchangeRatesAPI
 * @copyright Copyright (c) 2019 Ben Major
 * @license   https://github.com/benmajor/PHP-ExchangeRatesAPI/blob/master/LICENSE (MIT License)
 */

namespace BenMajor\ExchangeRatesAPI;

class ExchangeRatesAPI
{
    # Default API URL:
    const API_URL_SSL = 'https://api.exchangerate.host/';
    
    # Free plan API URL:
    const API_URL_NON_SSL = 'http://api.exchangerate.host/';
    
    # Fetch date
    private $fetchDate;

    # Date from which to request historic rates:
    private $dateFrom;
    
    # Date to which to request historic rates:
    private $dateTo;
    
    # The base currency (default is EUR):
    private $baseCurrency;
    
    # Exchange rates to fetch
    private $rates = [ ];
    
    # Contains our Guzzle client:
    private $client;
    
    # The URL of the API:
    private $apiURL = self::API_URL_SSL;
    
    # Regular Expression for the date:
    private $dateRegExp = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
    
    # Regular Expression for the currency:
    private $currencyRegExp = '/^[A-Z]{3}$/';
    
    # Supported currencies:
    private $_currencies = [
        'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD',
        'AWG', 'AZN', 'BAM', 'BBD', 'BDT', 'BGN', 'BHD', 'BIF',
        'BMD', 'BND', 'BOB', 'BRL', 'BSD', 'BTC', 'BTN', 'BWP',
        'BYR', 'BZD', 'CAD', 'CDF', 'CHF', 'CLF', 'CLP', 'CNY',
        'COP', 'CRC', 'CUC', 'CUP', 'CVE', 'CZK', 'DJF', 'DKK',
        'DOP', 'DZD', 'EGP', 'ERN', 'ETB', 'EUR', 'FJD', 'FKP',
        'GBP', 'GEL', 'GGP', 'GHS', 'GIP', 'GMD', 'GNF', 'GTQ',
        'GYD', 'HKD', 'HNL', 'HRK', 'HTG', 'HUF', 'IDR', 'ILS',
        'IMP', 'INR', 'IQD', 'IRR', 'ISK', 'JEP', 'JMD', 'JOD',
        'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KPW', 'KRW', 'KWD',
        'KYD', 'KZT', 'LAK', 'LBP', 'LKR', 'LRD', 'LSL', 'LTL',
        'LVL', 'LYD', 'MAD', 'MDL', 'MGA', 'MKD', 'MMK', 'MNT',
        'MOP', 'MRO', 'MUR', 'MVR', 'MWK', 'MXN', 'MYR', 'MZN',
        'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PAB',
        'PEN', 'PGK', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON',
        'RSD', 'RUB', 'RWF', 'SAR', 'SBD', 'SCR', 'SDG', 'SEK',
        'SGD', 'SHP', 'SLL', 'SOS', 'SRD', 'STD', 'SVC', 'SYP',
        'SZL', 'THB', 'TJS', 'TMT', 'TND', 'TOP', 'TRY', 'TTD',
        'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'UYU', 'UZS', 'VEF',
        'VND', 'VUV', 'WST', 'XAF', 'XAG', 'XAU', 'XCD', 'XDR',
        'XOF', 'XPF', 'YER', 'ZAR', 'ZMK', 'ZMW', 'ZWL',
        ];

    # Data source (default is forex):
    private $source;
    
    # Error messages:
    private $_errors = [
        'format.invalid_date'          => 'The specified date is invalid. Please use ISO 8601 notation (e.g. YYYY-MM-DD).',
        'format.invalid_currency_code' => 'The specified currency code is invalid. Please use ISO 4217 notation (e.g. EUR).',
        'format.unsupported_currency'  => 'The specified currency code is not currently supported.',
        'format.invalid_amount'        => 'Conversion amount must be specified as a numeric value.',
        'format.invalid_rounding'      => 'Rounding precision must be specified as a numeric value.'
    ];
    
    # ExchangeRatesAPI Access Key:
    private $access_key;
    
    function __construct( string $access_key = null, bool $use_ssl = true )
    {
        $this->setAccessKey($access_key);
        $this->setUseSSL($use_ssl);
        
        $this->client = new \GuzzleHttp\Client([ 'base_uri' => $this->apiURL ]);
    }
    
    /****************************/
    /*                          */
    /*         GETTERS          */
    /*                          */
    /****************************/
    
    # Get the fetch date date:
    public function getFetchDate()
    {
        return $this->dateFrom;
    }

    # Get the "from" date:
    public function getDateFrom()
    {
        return $this->dateFrom;
    }
    
    # Get the "to" date:
    public function getDateTo()
    {
        return $this->dateTo;
    }
    
    # Get the supported currencies:
    public function getSupportedCurrencies( string $concat = null )
    {
        return (is_null($concat)) ? $this->_currencies : implode($concat, $this->_currencies);
    }
    
    # Get the specified base currency:
    public function getBaseCurrency()
    {
        return (is_null($this->baseCurrency)) ? 'EUR' : $this->baseCurrency;
    }
    
    # Get the rates:
    public function getRates( string $concat = null )
    {
        return (! is_null($concat) ) ? implode($concat, $this->rates) : $this->rates;
    }
    
    # Get access key:
    public function getAccessKey()
    {
        return $this->access_key;
    }
    
    # Get boolean flag for SSL usage:
    public function getUseSSL()
    {
        return ($this->apiURL == self::API_URL_SSL);
    }

    # Get data source
    public function getSource()
    {
        return $this->source;
    }
    
    /****************************/
    /*                          */
    /*  SETTERS / DATA METHODS  */
    /*                          */
    /****************************/

    # set the fetch date
    public function setFetchDate( string $date )
    {
        if( $this->validateDateFormat($date) )
        {
            $this->fetchDate = $date;

            # Return object to preserve method-chaining:
            return $this;
        }

        throw new Exception( $this->_errors['format.invalid_date'] );
    }

    # Add a date-from:
    public function addDateFrom( string $from )
    {
        if( $this->validateDateFormat($from) )
        {
            $this->dateFrom = $from;
            
            # Return object to preserve method-chaining:
            return $this;
        }
        
        throw new Exception( $this->_errors['format.invalid_date'] );
    }
    
    # Remove a date-from:
    public function removeDateFrom()
    {
        $this->dateFrom = null;
        
        # Return object to preserve method-chaining:
        return $this;
    }
    
    # Add a date-to:
    public function addDateTo( string $to )
    {
        if( $this->validateDateFormat($to) )
        {
            $this->dateTo = $to;
            
            # Return object to preserve method-chaining:
            return $this;
        }
        
        throw new Exception( $this->_errors['format.invalid_date'] );
    }
    
    # Remove the date-to:
    public function removeDateTo()
    {
        $this->dateTo = null;
        
        # Return object to preserve method-chaining:
        return $this;
    }
    
    # Check if a currency code is in the supported range:
    public function currencyIsSupported( string $code )
    {
        $currencyCode = $this->sanitizeCurrencyCode($code);
        
        if( ! $this->validateCurrencyCodeFormat($currencyCode) )
        {
            throw new Exception( $this->_errors['format.invalid_currency_code'] );
        }
        
        return in_array( $currencyCode, $this->_currencies );
    }
    
    # Set the base currency:
    public function setBaseCurrency( string $currency )
    {
        # Sanitize the code:
        $currencyCode = $this->sanitizeCurrencyCode($currency);
        
        # Is it valid?
        $this->verifyCurrencyCode( $currencyCode );
        
        $this->baseCurrency = $currencyCode;
        
        # Return object to preserve method-chaining:
        return $this;
    }

    # Add multiple currencies at once
    public function addRates( array $currencies )
    {
        foreach ($currencies as $currency)
        {
            $this->addRate($currency);
        }
        return $this;
    }

    # Add a currency to the returned rates:
    public function addRate( string $currency )
    {
        # Sanitize the code:
        $currencyCode = $this->sanitizeCurrencyCode($currency);
        
        $this->verifyCurrencyCode($currencyCode);
        
        $this->rates[] = $currencyCode;
        
        # Return object to preserve method-chaining:
        return $this;
    }

    # Remove multiple currencies at once
    public function removeRates( array $currencies )
    {
        foreach ($currencies as $currency)
        {
            $this->removeRate($currency);
        }
        return $this;
    }

    # Remove a currency from the returned rates:
    public function removeRate( string $currency )
    {
        # Sanitize the code:
        $currencyCode = $this->sanitizeCurrencyCode($currency);
        
        # Verify it's valid:
        $this->verifyCurrencyCode($currencyCode);
        
        $newRates = [ ];
        
        # Loop over the rates and check them against the currency to remove:
        foreach( $this->getRates() as $rate )
        {
            if( $rate != $currencyCode )
            {
                $newRates[] = $rate;
            }
        }
        
        # Copy the temp array to the rates:
        $this->rates = $newRates;
        
        # Return object to preseve method chaining:
        return $this;
    }
    
    # Set access key:
    public function setAccessKey( string $access_key = null )
    {
        $this->access_key = $access_key;
        
        # Return object to preseve method chaining:
        return $this;
    }

    # Set SSL flag and API URL:
    public function setUseSSL( bool $use_ssl = true )
    {
        if ( $use_ssl )
        {
            $this->apiURL = self::API_URL_SSL;
        }
        else
        {
            $this->apiURL = self::API_URL_NON_SSL;
        }
        
        return $this;
    }

    # Set data source
    public function setSource(string $source = null)
    {
        if ($source !== null) {
            $source = $this->sanitizeSource($source);
        }

        $this->source = $source;

        return $this;
    }

    /****************************/
    /*                          */
    /*   API FUNCTION CALLS     */
    /*                          */
    /****************************/
    
    # Static function to quickly make a conversion:
    public function convert( string $to, float $amount, $rounding = 2 )
    {
        $currencyTo = $this->sanitizeCurrencyCode($to);
        
        # Check it's an allowed currency:
        $this->verifyCurrencyCode($to);
        
        if( !is_numeric($amount) )
        {
            throw new Exception( $this->_errors['format.invalid_amount'] );
        }
        
        if( ! is_numeric($rounding) )
        {
            throw new Exception( $this->_errors['format.invalid_rounding'] );
        }
        
        # Now get the response:
        $rate = $this->addRate($currencyTo)->fetch()->getRate();
        
        return round(
            ($amount * $rate),
            $rounding
        );
    }
    
    # Send off the request:
    public function fetch( $returnJSON = false, $parseJSON = true )
    {
        # Build the URL:
        $params = [ ];
        
        # Set access key if available:
        if ( !is_null($this->getAccessKey()) )
        {
            $params['access_key'] = $this->getAccessKey();
        }

        # Set the relevant endpoint:
        if( is_null($this->dateFrom) )
        {
            $endpoint = is_null($this->fetchDate) ? 'latest' : $this->fetchDate;
        }
        else
        {
            $endpoint = 'history';
        }
        
        # Add dateFrom if specified:
        if( ! is_null($this->getDateFrom()) )
        {
            $params['start_at'] = $this->getDateFrom();
        }
        
        # Add a dateTo:
        if( ! is_null($this->getDateTo()) )
        {
            $params['end_at'] = $this->getDateTo();
        }
        
        # Set the base currency:
        if( ! is_null($this->getBaseCurrency()) )
        {
            $params['base'] = $this->getBaseCurrency();
        }
        
        # Are there any rates set?
        if( count($this->rates) > 0 )
        {
            $params['symbols'] = $this->getRates(',');
        }

        # Set the data source:
        if( ! is_null($this->getSource()) )
        {
            $params['source'] = $this->getSource();
        }
        
        # Begin the sending:
        try
        {
            $guzzleResponse = $this->client->request('GET', $endpoint, [ 'query' => $params ]);
            
            $response = new Response( $guzzleResponse );
            
            if( $returnJSON )
            {
                $json = $response->toJSON();
                
                if( $parseJSON )
                {
                    return json_decode( $json );
                }
                
                return $json;
            }
            
            return $response;
        }
        catch( \Exception $e )
        {
            throw new Exception( $e->getMessage() );
        }
    }
    
    /****************************/
    /*                          */
    /*  INTERNAL VERIFICTATION  */
    /*                          */
    /****************************/
    
    # Validate a date is in the correct format:
    private function validateDateFormat( string $date = null )
    {
        if( !is_null($date) )
        {
            return preg_match( $this->dateRegExp, $date);
        }
        
        return false;
    }
    
    # Validate a currency code is in the correct format:
    private function validateCurrencyCodeFormat( string $code = null )
    {
        if( !is_null($code) )
        {
            # Is the string longer than 3 characters?
            if( strlen($code) != 3 )
            {
                return false;
            }
            
            # Does it contain non-alphabetical characters?
            if( ! preg_match( $this->currencyRegExp, $code) )
            {
                return false;
            }
            
            return true;
        }
        
        return false;
    }
    
    # Runs tests to verify a currency code:
    private function verifyCurrencyCode( string $code )
    {
        $currencyCode = $this->sanitizeCurrencyCode($code);
        
        # Is the currency code in ISO 4217 format?
        if( ! $this->validateCurrencyCodeFormat($currencyCode) )
        {
            throw new Exception( $this->_errors['format.invalid_currency_code'] );
        }
        
        # Is it a supported currency?
        if( ! $this->currencyIsSupported($currencyCode) )
        {
            throw new Exception( $this->_errors['format.unsupported_currency'] );
        }
    }
    
    # Sanitize a currency code:
    private function sanitizeCurrencyCode( string $code )
    {
        return trim(
            strtoupper( $code )
        );
    }

    # Sanitize a data source:
    private function sanitizeSource( string $source )
    {
        return trim(
            strtolower( $source )
        );
    }
}
