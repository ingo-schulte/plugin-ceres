<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class SelectSettingFactory
 *
 * Factory class for select setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class SelectSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('select');
    }

    /**
     * Set if the select should be opened at the top
     *
     * @param boolean $openOnTop
     * @return SelectSettingFactory
     */
    public function withOpenOnTop($openOnTop)
    {
        return $this->withOption('openOnTop', $openOnTop);
    }

    /**
     * set the values of the select
     *
     * @param array $listBoxValues
     * @return SelectSettingFactory
     */
    public function withListBoxValues($listBoxValues)
    {
        return $this->withOption('listBoxValues', $listBoxValues);
    }
}
