<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class DateSettingFactory
 *
 * Factory class for date setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class DateSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('date');
    }

    /**
     * Set if the calendar should be opened on top.
     *
     * @param boolean $isCalendarTop
     * @return DateSettingFactory
     */
    public function withCalendarTop($isCalendarTop)
    {
        return $this->withOption('openCalendarTop', $isCalendarTop);
    }

    /**
     * Set if the date format should be shown.
     *
     * @param string $format
     * @return DateSettingFactory
     */
    public function withDisplayDateFormat($format)
    {
        return $this->withOption('displayDateFormat', $format);
    }
}
