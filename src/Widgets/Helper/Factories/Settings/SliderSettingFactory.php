<?php


namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class SliderSettingFactory
 *
 * Factory class for slider setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class SliderSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('slider');
    }

    /**
     * The minimum number of slides
     *
     * @param integer $min
     * @return SliderSettingFactory
     */
    public function withMin($min)
    {
        return $this->withOption('min', $min);
    }

    /**
     * The maximum number of slides
     *
     * @param integer $max
     * @return SliderSettingFactory
     */
    public function withMax($max)
    {
        return $this->withOption('max', $max);
    }

    /**
     * The interval of the slider
     *
     * @param integer $interval
     * @return SliderSettingFactory
     */
    public function withInterval($interval)
    {
        return $this->withOption('interval', $interval);
    }

    /**
     * The precision of the slider
     *
     * @param integer $precision
     * @return SliderSettingFactory
     */
    public function withPrecision($precision)
    {
        return $this->withOption('precision', $precision);
    }

    /**
     * Show the minimum an maximum slides
     *
     * @param boolean $showMinMax
     * @return SliderSettingFactory
     */
    public function withShowMinMax($showMinMax)
    {
        return $this->withOption('showMinMax', $showMinMax);
    }

    /**
     * Show the ticks of the slides
     *
     * @param boolean $showTicks
     * @return SliderSettingFactory
     */
    public function withShowTicks($showTicks)
    {
        return $this->withOption('withTicks', $showTicks);
    }

}
