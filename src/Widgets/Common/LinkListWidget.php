<?php

namespace Ceres\Widgets\Common;

use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

/**
 * Class LinkListWidget
 *
 * Widget class to provide data and settings for the link list widget
 *
 * @package Ceres\Widgets\Common
 */
class LinkListWidget extends ListWidget
{
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::LinkListWidget")
            ->withLabel("Widget.linkListLabel")
            ->withPreviewImageUrl("/images/widgets/link-list.svg")
            ->withType(WidgetTypes::STATIC)
            ->withCategory(WidgetCategories::TEXT)
            ->withPosition(1000)
            ->withDeprecated()
            ->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function getSettings()
    {
        return parent::getSettings();
    }
    
    /**
     * @inheritDoc
     */
    protected function getTemplateData($widgetSettings, $isPreview)
    {
        $templateData = parent::getTemplateData($widgetSettings, $isPreview);
        $templateData['isLinkList'] = true;
        return $templateData;
    }
}
