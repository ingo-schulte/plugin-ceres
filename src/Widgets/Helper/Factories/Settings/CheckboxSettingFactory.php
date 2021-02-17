<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class CheckboxSettingFactory
 *
 * Factory class for checkbox setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class CheckboxSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('checkbox');
    }

    /**
     * Set an icon to be displayed.
     *
     * @param string $icon
     * @return CheckboxSettingFactory
     */
    public function withIcon($icon)
    {
        return $this->withOption('icon', $icon);
    }
}
