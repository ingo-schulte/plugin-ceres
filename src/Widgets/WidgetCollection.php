<?php

namespace Ceres\Widgets;

use Ceres\Widgets\Basket\BasketTotalsWidget;
use Ceres\Widgets\Basket\BasketWidget;
use Ceres\Widgets\Basket\CouponWidget;
use Ceres\Widgets\Basket\ShippingCountryWidget;
use Ceres\Widgets\Category\Filter\AttributesPropertiesCharacteristicsFilterWidget;
use Ceres\Widgets\Category\Filter\AvailabilityFilterWidget;
use Ceres\Widgets\Category\Filter\CategoryFilterWidget;
use Ceres\Widgets\Category\Filter\ManufacturerFilterWidget;
use Ceres\Widgets\Category\Filter\PriceFilterWidget;
use Ceres\Widgets\Category\Filter\SelectedFilterWidget;
use Ceres\Widgets\Category\ItemGridWidget;
use Ceres\Widgets\Category\ItemSortingWidget;
use Ceres\Widgets\Category\ItemsPerPageWidget;
use Ceres\Widgets\Category\PaginationWidget;
use Ceres\Widgets\Category\ToolbarWidget;
use Ceres\Widgets\Checkout\CancelPaymentWidget;
use Ceres\Widgets\Checkout\ContactWishWidget;
use Ceres\Widgets\Checkout\CustomerSignWidget;
use Ceres\Widgets\Checkout\GtcCheckWidget;
use Ceres\Widgets\Checkout\PaymentProviderWidget;
use Ceres\Widgets\Checkout\PlaceOrderWidget;
use Ceres\Widgets\Checkout\ShippingPrivacyCheckWidget;
use Ceres\Widgets\Checkout\ShippingProfileWidget;
use Ceres\Widgets\Checkout\SubscribeNewsletterCheckWidget;
use Ceres\Widgets\Common\BackgroundWidget;
use Ceres\Widgets\Common\CodeWidget;
use Ceres\Widgets\Common\CollapseWidget;
use Ceres\Widgets\Common\GoogleMapsWidget;
use Ceres\Widgets\Common\ImageBoxWidget;
use Ceres\Widgets\Common\ImageCarouselWidget;
use Ceres\Widgets\Common\InlineTextWidget;
use Ceres\Widgets\Common\ItemListWidget;
use Ceres\Widgets\Common\LinkListWidget;
use Ceres\Widgets\Common\LinkWidget;
use Ceres\Widgets\Common\ListWidget;
use Ceres\Widgets\Common\LiveShoppingWidget;
use Ceres\Widgets\Common\NewsletterUnsubscribeWidget;
use Ceres\Widgets\Common\NewsletterWidget;
use Ceres\Widgets\Common\PrintButtonWidget;
use Ceres\Widgets\Common\PrivacySettingsWidget;
use Ceres\Widgets\Common\SeparatorWidget;
use Ceres\Widgets\Common\TextWidget;
use Ceres\Widgets\Common\TitleBarWidget;
use Ceres\Widgets\Contact\ContactDetailsWidget;
use Ceres\Widgets\Customer\AddressWidget;
use Ceres\Widgets\Customer\ChangeMailWidget;
use Ceres\Widgets\Customer\ChangePasswordWidget;
use Ceres\Widgets\Footer\CookieBarWidget;
use Ceres\Widgets\Footer\LegalInformationWidget;
use Ceres\Widgets\Form\AcceptPrivacyPolicyWidget;
use Ceres\Widgets\Form\MailFormWidget;
use Ceres\Widgets\Form\MailInputWidget;
use Ceres\Widgets\Form\SelectionWidget;
use Ceres\Widgets\Form\TextAreaWidget;
use Ceres\Widgets\Form\TextInputWidget;
use Ceres\Widgets\Grid\AdditionalInformationWidget;
use Ceres\Widgets\Grid\FourColumnWidget;
use Ceres\Widgets\Grid\StickyContainerWidget;
use Ceres\Widgets\Grid\TabWidget;
use Ceres\Widgets\Grid\ThreeColumnWidget;
use Ceres\Widgets\Grid\TwoColumnWidget;
use Ceres\Widgets\Header\BreadcrumbWidget;
use Ceres\Widgets\Header\NavigationWidget;
use Ceres\Widgets\Header\Search\SearchSuggestionCategoryWidget;
use Ceres\Widgets\Header\Search\SearchSuggestionItemWidget;
use Ceres\Widgets\Header\Search\SearchSuggestionSuggestionWidget;
use Ceres\Widgets\Header\TopBarWidget;
use Ceres\Widgets\Item\AddToBasketWidget;
use Ceres\Widgets\Item\AddToWishListWidget;
use Ceres\Widgets\Item\AttributeWidget;
use Ceres\Widgets\Item\GraduatedPriceWidget;
use Ceres\Widgets\Item\ItemAvailabilityWidget;
use Ceres\Widgets\Item\ItemBundleWidget;
use Ceres\Widgets\Item\ItemDataTableWidget;
use Ceres\Widgets\Item\ItemImageWidget;
use Ceres\Widgets\Item\ItemPriceWidget;
use Ceres\Widgets\Item\ItemSetWidget;
use Ceres\Widgets\Item\OrderPropertyWidget;
use Ceres\Widgets\Item\QuantityInputWidget;
use Ceres\Widgets\Item\TagsWidget;
use Ceres\Widgets\Item\WishListWidget;
use Ceres\Widgets\Legal\LegalTextsWidget;
use Ceres\Widgets\Login\GuestLoginWidget;
use Ceres\Widgets\Login\LoginWidget;
use Ceres\Widgets\Login\RegistrationWidget;
use Ceres\Widgets\MyAccount\AccountSettingsWidget;
use Ceres\Widgets\MyAccount\BankDataSelectWidget;
use Ceres\Widgets\MyAccount\GreetingWidget;
use Ceres\Widgets\MyAccount\LogoutButtonWidget;
use Ceres\Widgets\MyAccount\OrderHistoryWidget;
use Ceres\Widgets\MyAccount\OrderReturnHistoryWidget;
use Ceres\Widgets\Navigation\NavigationTreeWidget;
use Ceres\Widgets\Navigation\StepByStepNavigationWidget;
use Ceres\Widgets\OrderConfirmation\OrderDataWidget;
use Ceres\Widgets\OrderConfirmation\OrderDocumentsWidget;
use Ceres\Widgets\OrderConfirmation\OrderReturnWidget;
use Ceres\Widgets\OrderConfirmation\OrderTotalsWidget;
use Ceres\Widgets\OrderConfirmation\PurchasedItemsWidget;

/**
 * Class WidgetCollection
 *
 * Provide constants determining which widgets belong to which category
 *
 * @package Ceres\Widgets
 */
class WidgetCollection
{
    /** @var array Widgets in the basket category */
    const BASKET_WIDGETS = [
        BasketTotalsWidget::class,
        BasketWidget::class,
        CouponWidget::class,
        ShippingCountryWidget::class
    ];
    
    /** @var array Widgets in the checkout category */
    const CHECKOUT_WIDGETS = [
        CancelPaymentWidget::class,
        ContactWishWidget::class,
        GtcCheckWidget::class,
        PaymentProviderWidget::class,
        PlaceOrderWidget::class,
        ShippingPrivacyCheckWidget::class,
        ShippingProfileWidget::class,
        SubscribeNewsletterCheckWidget::class,
        CustomerSignWidget::class
    ];
    
    /** @var array Widgets in the common category */
    const COMMON_WIDGETS = [
        BackgroundWidget::class,
        CodeWidget::class,
        CollapseWidget::class,
        GoogleMapsWidget::class,
        ImageBoxWidget::class,
        ImageCarouselWidget::class,
        InlineTextWidget::class,
        ItemListWidget::class,
        LinkListWidget::class,
        LinkWidget::class,
        ListWidget::class,
        LiveShoppingWidget::class,
        NewsletterUnsubscribeWidget::class,
        NewsletterWidget::class,
        PrintButtonWidget::class,
        PrivacySettingsWidget::class,
        SeparatorWidget::class,
        TextWidget::class,
        TitleBarWidget::class
    ];
    
    /** @var array Widgets in the contact category */
    const CONTACT_WIDGETS = [
        ContactDetailsWidget::class
    ];
    
    /** @var array Widgets in the customer category */
    const CUSTOMER_WIDGETS = [
        AddressWidget::class,
        ChangeMailWidget::class,
        ChangePasswordWidget::class
    ];
    
    /** @var array Widgets in the footer category */
    const FOOTER_WIDGETS = [
        CookieBarWidget::class,
        LegalInformationWidget::class
    ];
    
    /** @var array Widgets in the form category */
    const FORM_WIDGETS = [
        AcceptPrivacyPolicyWidget::class,
        MailFormWidget::class,
        MailInputWidget::class,
        SelectionWidget::class,
        TextAreaWidget::class,
        TextInputWidget::class
    ];
    
    /** @var array Widgets in the grid category */
    const GRID_WIDGETS = [
        AdditionalInformationWidget::class,
        FourColumnWidget::class,
        StickyContainerWidget::class,
        TabWidget::class,
        ThreeColumnWidget::class,
        TwoColumnWidget::class
    ];
    
    /** @var array Widgets in the header category */
    const HEADER_WIDGETS = [
        BreadcrumbWidget::class,
        NavigationWidget::class,
        SearchSuggestionCategoryWidget::class,
        SearchSuggestionItemWidget::class,
        SearchSuggestionSuggestionWidget::class,
        TopBarWidget::class
    ];
    
    /** @var array Widgets in the item category */
    const ITEM_WIDGETS = [
        AddToBasketWidget::class,
        AddToWishListWidget::class,
        AttributeWidget::class,
        GraduatedPriceWidget::class,
        ItemAvailabilityWidget::class,
        ItemBundleWidget::class,
        ItemDataTableWidget::class,
        ItemImageWidget::class,
        ItemPriceWidget::class,
        OrderPropertyWidget::class,
        WishListWidget::class,
        TagsWidget::class
    ];
    
    /** @var array Widgets in the item set category */
    const ITEM_SET_WIDGETS = [
        ItemSetWidget::class,
        QuantityInputWidget::class
    ];
    
    /** @var array Widgets in the legal category */
    const LEGAL_WIDGETS = [
        LegalTextsWidget::class
    ];
    
    /** @var array Widgets in the login category */
    const LOGIN_WIDGETS = [
        GuestLoginWidget::class,
        LoginWidget::class,
        RegistrationWidget::class
    ];
    
    /** @var array Widgets in the my account category */
    const MY_ACCOUNT_WIDGETS = [
        AccountSettingsWidget::class,
        BankDataSelectWidget::class,
        GreetingWidget::class,
        LogoutButtonWidget::class,
        OrderHistoryWidget::class,
        OrderReturnHistoryWidget::class
    ];
    
    /** @var array Widgets in the order confirmation category */
    const ORDER_CONFIRMATION_WIDGETS = [
        OrderDataWidget::class,
        OrderDocumentsWidget::class,
        OrderReturnWidget::class,
        OrderTotalsWidget::class,
        PurchasedItemsWidget::class
    ];
    
    /** @var array Widgets in the category item category */
    const CATEGORY_ITEM_WIDGETS = [
        ItemSortingWidget::class,
        ItemsPerPageWidget::class,
        ItemGridWidget::class,
        ToolbarWidget::class,
        PaginationWidget::class,
        NavigationTreeWidget::class,
        StepByStepNavigationWidget::class,
        SelectedFilterWidget::class,
        AttributesPropertiesCharacteristicsFilterWidget::class,
        AvailabilityFilterWidget::class,
        CategoryFilterWidget::class,
        ManufacturerFilterWidget::class,
        PriceFilterWidget::class
    ];
    
    /**
     * Return all existing widget categories
     *
     * @return array
     */
    public static function all()
    {
        return array_merge(
            self::BASKET_WIDGETS,
            self::CHECKOUT_WIDGETS,
            self::COMMON_WIDGETS,
            self::CONTACT_WIDGETS,
            self::CUSTOMER_WIDGETS,
            self::FOOTER_WIDGETS,
            self::FORM_WIDGETS,
            self::GRID_WIDGETS,
            self::HEADER_WIDGETS,
            self::ITEM_WIDGETS,
            self::ITEM_SET_WIDGETS,
            self::LEGAL_WIDGETS,
            self::LOGIN_WIDGETS,
            self::MY_ACCOUNT_WIDGETS,
            self::ORDER_CONFIRMATION_WIDGETS,
            self::CATEGORY_ITEM_WIDGETS
        );
    }

}
