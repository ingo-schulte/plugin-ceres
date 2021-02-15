<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class CheckboxGroupSettingFactory
 *
 * Factory class for checkbox group setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class CheckboxGroupSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('checkboxGroup');
    }

    /**
     * Set a collapsed checkbox
     *
     * @param boolean $collapsed
     * @return CheckboxGroupSettingFactory
     */
    public function withCollapsed($collapsed)
    {
        return $this->withOption('collapsed', $collapsed);
    }

    /**
     * Set the values of the checkbox
     *
     * @param array $checkboxValues
     * @return CheckboxGroupSettingFactory
     */
    public function withCheckboxValues($checkboxValues)
    {
        return $this->withOption('checkboxValues', $checkboxValues);
    }

    /**
     * Set the default value
     *
     * @param array $defaultValue
     * @return $this
     */
    public function withDefaultValue($defaultValue)
    {
        $this->data['defaultValue'] = $defaultValue;
        return $this;
    }
}
