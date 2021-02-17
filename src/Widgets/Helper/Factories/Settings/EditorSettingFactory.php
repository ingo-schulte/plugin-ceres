<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class EditorSettingFactory
 *
 * Factory class for editor setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class EditorSettingFactory extends BaseSettingFactory
{
    /**
     * Determine if a placeholder should be shown.
     *
     * @param string $placeholder
     * @return BaseSettingFactory|EditorSettingFactory
     */
    public function withPlaceHolder($placeholder)
    {
        return $this->withOption('placeholder', $placeholder);
    }

    /**
     * Set a fixed height for the editor.
     *
     * @param string $fixedHeight
     * @return BaseSettingFactory|EditorSettingFactory
     */
    public function withFixedHeight($fixedHeight)
    {
        return $this->withOption('fixedHeight', $fixedHeight);
    }

    /**
     * Set the minimum height of the editor.
     *
     * @param string $minHeight
     * @return BaseSettingFactory|EditorSettingFactory
     */
    public function withMinHeight($minHeight)
    {
        return $this->withOption('minHeight', $minHeight);
    }
}
