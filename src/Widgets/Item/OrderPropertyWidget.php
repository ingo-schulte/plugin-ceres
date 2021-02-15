<?php

namespace Ceres\Widgets\Item;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

/**
 * Class OrderPropertyWidget
 *
 * Widget class to provide data and settings for the order property widget
 *
 * @package Ceres\Widgets\Item
 */
class OrderPropertyWidget extends BaseWidget
{
    /** @inheritDoc */
    protected $template = "Ceres::Widgets.Item.OrderPropertyWidget";
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::OrderPropertyWidget")
            ->withLabel("Widget.orderPropertyLabel")
            ->withPreviewImageUrl("/images/widgets/order-property.svg")
            ->withType(WidgetTypes::SET_COMPONENT)
            ->withCategory(WidgetCategories::ITEM)
            ->withPosition(300)
            ->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settingsFactory */
        $settingsFactory = pluginApp(WidgetSettingsFactory::class);

        $settingsFactory->createCustomClass();
        $settingsFactory->createAppearance(true);
        $settingsFactory->createSpacing();

        return $settingsFactory->toArray();
    }
}
