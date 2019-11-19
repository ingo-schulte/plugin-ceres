<?php

namespace Ceres\Widgets\MyAccount;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class BankDataSelectWidget extends BaseWidget
{
    protected $template = "Ceres::Widgets.MyAccount.BankDataSelectWidget";

    public function getData()
    {
        return WidgetDataFactory::make("Ceres::BankDataSelectWidget")
            ->withLabel("Template.myAccountBankDetails")
            ->withPreviewImageUrl("/images/widgets/bank-details.svg")
            ->withType(WidgetTypes::MY_ACCOUNT)
            ->withCategory(WidgetCategories::MY_ACCOUNT)
            ->withPosition(100)
            ->toArray();
    }
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
