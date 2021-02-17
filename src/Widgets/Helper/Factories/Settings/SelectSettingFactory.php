<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class SelectSettingFactory
 *
 * Factory class for select setting.
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
     * Set if the selection should be opened at the top.
     *
     * @param boolean $openOnTop
     * @return SelectSettingFactory
     */
    public function withOpenOnTop($openOnTop)
    {
        return $this->withOption('openOnTop', $openOnTop);
    }

    /**
     * Set the values of the selection.
     *
     * @param array $listBoxValues
     * @return SelectSettingFactory
     */
    public function withListBoxValues($listBoxValues)
    {
        return $this->withOption('listBoxValues', $listBoxValues);
    }
}
