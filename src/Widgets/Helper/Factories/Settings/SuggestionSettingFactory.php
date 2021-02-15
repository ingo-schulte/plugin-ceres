<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class SuggestionSettingFactory
 *
 * Factory class for suggestion setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class SuggestionSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('suggestion');
    }

    /**
     * Set list box values
     *
     * @param array $listBoxValues
     * @return SuggestionSettingFactory
     */
    public function withListBoxValues($listBoxValues)
    {
        return $this->withOption('listBoxValues', $listBoxValues);
    }
}
