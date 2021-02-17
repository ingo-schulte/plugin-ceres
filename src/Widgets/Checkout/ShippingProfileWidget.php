<?php

namespace Ceres\Widgets\Checkout;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

/**
 * Class ShippingProfileWidget
 *
 * Widget class to provide data and settings for the shipping profile selection widget.
 *
 * @package Ceres\Widgets\Checkout
 */
class ShippingProfileWidget extends BaseWidget
{
    /** @inheritDoc */
    protected $template = "Ceres::Widgets.Checkout.ShippingProfileWidget";
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return WidgetDataFactory::make("Ceres::ShippingProfileWidget")
            ->withLabel("Widget.shippingProfileLabel")
            ->withPreviewImageUrl("/images/widgets/shipping-select.svg")
            ->withType(WidgetTypes::CHECKOUT)
            ->withCategory(WidgetCategories::CHECKOUT)
            ->withPosition(100)
            ->withMaxPerPage(1)
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
