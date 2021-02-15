<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class UrlSettingFactory
 *
 * Factory class for url setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class UrlSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('url');
    }

    /**
     * Allow internal links
     *
     * @param array $internalLinks
     * @return UrlSettingFactory
     */
    public function withInternalLinks($internalLinks)
    {
        return $this->withOption('internalLinks', $internalLinks);
    }
}
