<?php


namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class TextareaSettingFactory
 *
 * Factory class for text area setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class TextareaSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('textarea');
    }

    /**
     * Set the text area to a fixed height.
     *
     * @param boolean $isFixedHeight
     * @return TextareaSettingFactory
     */
    public function withFixedHeight($isFixedHeight)
    {
        return $this->withOption('hasFixedHeight', $isFixedHeight);
    }

    /**
     * Set the maximum rows.
     *
     * @param integer $maxRows
     * @return TextareaSettingFactory
     */
    public function withMaxRows($maxRows)
    {
        return $this->withOption('maxRows', $maxRows);
    }
}
