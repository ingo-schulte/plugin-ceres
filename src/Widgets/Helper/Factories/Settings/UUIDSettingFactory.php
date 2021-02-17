<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class UUIDSettingFactory
 *
 * Factory class for UUID setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class UUIDSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('uuid');
    }
}
