<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class RadioGroupSettingFactory
 *
 * Factory class for radio group setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class RadioGroupSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('radioGroup');
    }

    /**
     * Set the values of the radios
     *
     * @param array $radioValues
     * @return RadioGroupSettingFactory
     */
    public function withRadioValues($radioValues)
    {
        return $this->withOption('radioValues', $radioValues);
    }
}
