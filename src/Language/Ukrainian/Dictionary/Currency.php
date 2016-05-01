<?php
namespace Kwn\NumberToWords\Language\Ukrainian\Dictionary;

use Kwn\NumberToWords\Model\Currency as CurrencyModel;

class Currency
{

    protected $units = [
        'PLN' => ['злотий', 'злотих', 'злотих'],
        'EUR' => ['євро', 'євро', 'євро'],
        'GBP' => ['фунт', 'фунти', 'фунтів'],
        'USD' => ['долар', 'долари', 'доларів'],
        'CHF' => ['франк', 'франки', 'франків'],
        'RON' => ['лей', 'леї', 'леїв'],
        'HUF' => ['форинт', 'форинти', 'форинтів'],
        'CZK' => ['корона', 'корони', 'корон'],
        'DKK' => ['корона', 'корони', 'корон'],
        'SEK' => ['корона', 'корони', 'корон'],
        'UAH' => ['гривня', 'гривні', 'гривень'],
        'KZT' => ['тенге', 'тенге', 'тенге'],
        'RUB' => ['рубль', 'рублі', 'рублів']
    ];

    protected $subunits = [
        'PLN' => ['пенні', 'пенні', 'пеннів'],
        'EUR' => ['євро цент', 'євро центи', 'євро центів'],
        'GBP' => ['пенс', 'пенси', 'пенсів'],
        'USD' => ['цент', 'центи', 'центів'],
        'CHF' => ['сантим', 'сантими', 'сантимів'],
        'RON' => ['бан', 'бани', 'банів'],
        'HUF' => ['філлер', 'філлери', 'філлерів'],
        'CZK' => ['геллер', 'геллери', 'геллерів'],
        'DKK' => ['оре', 'оре', 'оре'],
        'SEK' => ['оре', 'оре', 'оре'],
        'UAH' => ['копійка', 'копійки', 'копійок'],
        'KZT' => ['тіин', 'тіин', 'тіин'],
        'RUB' => ['копійка', 'копійки', 'копійок']
    ];

    public function getUnitName(CurrencyModel $currency)
    {
        return $this->units[$currency->getIdentifier()];
    }

    public function getSubunitName(CurrencyModel $currency)
    {
        return $this->subunits[$currency->getIdentifier()];
    }

    /**
     * @return array
     */
    public function getUnitNames()
    {
        return $this->units;
    }

    /**
     * @return array
     */
    public function getSubunitNames()
    {
        return $this->subunits;
    }

}
