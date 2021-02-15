<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class CategorySettingFactory
 *
 * Factory class for category setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class CategorySettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('category');
    }

    /**
     * Set if the reset button should be displayed
     *
     * @param bool $displayResetButton
     * @return CategorySettingFactory
     */
    public function withDisplayResetButton($displayResetButton)
    {
        return $this->withOption('displayResetButton', $displayResetButton);
    }

    /**
     * Set if the search box should be displayed
     *
     * @param bool $displaySearch
     * @return CategorySettingFactory
     */
    public function withDisplaySearch($displaySearch)
    {
        return $this->withOption('displaySearch', $displaySearch);
    }

    /**
     * Set if the full path of the selected category should be displayed
     *
     * @param bool $showFullSelectionPath
     * @return CategorySettingFactory
     */
    public function withShowFullSelectionPath($showFullSelectionPath)
    {
        return $this->withOption('showFullSelectionPath', $showFullSelectionPath);
    }
}
