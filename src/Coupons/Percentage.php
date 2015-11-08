<?php

namespace LukePOLO\LaraCart\Coupons;

use LukePOLO\LaraCart\Cart;
use LukePOLO\LaraCart\Contracts\CouponContract;
use LukePOLO\LaraCart\Traits\CouponTrait;

/**
 * Class Percentage
 *
 * @package LukePOLO\LaraCart\Coupons
 */

/**
 * Class Percentage
 * @package LukePOLO\LaraCart\Coupons
 */
class Percentage implements CouponContract
{
    use CouponTrait;

    public $code;
    public $value;


    /**
     * Percentage constructor.
     *
     * @param $code
     * @param $value
     *
     * @param array $attributes
     */
    public function __construct($code, $value, $attributes = [])
    {
        $this->code = $code;
        $this->value = $value;

        $this->setAttributes($attributes);
    }

    /**
     * Gets the discount amount
     *
     * @return string
     */
    public function discount()
    {
        return \LaraCart::total(false, false) * $this->value;
    }


    /**
     * @return mixed
     */
    public function displayValue()
    {
        return $this->value;
    }
}