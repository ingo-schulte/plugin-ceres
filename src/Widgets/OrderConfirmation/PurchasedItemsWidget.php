<?php

namespace Ceres\Widgets\OrderConfirmation;

use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;
use Ceres\Widgets\OrderConfirmation\OrderConfirmationBaseWidget;

/**
 * Class PurchasedItemsWidget
 *
 * Widget class to provide data and settings for the purchased items widget
 *
 * @package Ceres\Widgets\OrderConfirmation
 */
class PurchasedItemsWidget extends OrderConfirmationBaseWidget
{
    /** @inheritDoc */
    protected $template = "Ceres::Widgets.OrderConfirmation.PurchasedItemsWidget";
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::PurchasedItemsWidget")
            ->withLabel("Widget.purchasedItemsLabel")
            ->withPreviewImageUrl("/images/widgets/purchased-items.svg")
            ->withType(WidgetTypes::DEFAULT)
            ->withCategory(WidgetCategories::ORDER_CONFIRMATION)
            ->withPosition(100)
            ->toArray();
    }
    
    /**
     * @inheritDoc
     */
    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        $settings->createCustomClass();
        $settings->createAppearance();
        $settings->createSpacing();

        return $settings->toArray();
    }
}
