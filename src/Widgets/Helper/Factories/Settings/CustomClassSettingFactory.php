<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class CustomClassSettingFactory
 *
 * Factory class for custom class setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class CustomClassSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('text')
            ->withDefaultValue('')
            ->withName('Widget.customClass')
            ->withOption('tooltipText', 'Widget.customClassTooltip');
    }
}
