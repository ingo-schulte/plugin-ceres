<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class DoubleSettingFactory
 *
 * Factory class for double setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class DoubleSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('double');
    }

    /**
     * Set if the input is for a price.
     *
     * @param $isPriceInput
     * @return DoubleSettingFactory
     */
    public function withPriceInput($isPriceInput)
    {
        return $this->withOption('isPriceInput', $isPriceInput);
    }

    /**
     * Set how many decimals should be shown.
     *
     * @param integer $decimalCount
     * @return DoubleSettingFactory
     */
    public function withDecimalCount($decimalCount)
    {
        return  $this->withOption('decimalCount', $decimalCount);
    }
}
