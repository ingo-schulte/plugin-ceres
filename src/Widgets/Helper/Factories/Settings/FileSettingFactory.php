<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class FileSettingFactory
 *
 * Factory class for file setting.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class FileSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('file');
        $this->withDefaultValue('');
    }

    /**
     * Determine if the preview should be shown.
     *
     * @param boolean $showPreview
     * @return FileSettingFactory
     */
    public function withShowPreview($showPreview)
    {
        return $this->withOption('showPreview', $showPreview);
    }

    /**
     * Set the allowed file extensions.
     *
     * @param array $allowedExtensions
     * @return FileSettingFactory
     */
    public function withAllowedExtensions($allowedExtensions)
    {
        return $this->withOption('allowedExtensions', $allowedExtensions);
    }

    /**
     * Set if picking folders is allowed.
     *
     * @param bool $foldersAllowed
     * @return FileSettingFactory
     */
    public function withFoldersAllowed($foldersAllowed)
    {
        return $this->withOption('allowedFolders', $foldersAllowed);
    }
}
