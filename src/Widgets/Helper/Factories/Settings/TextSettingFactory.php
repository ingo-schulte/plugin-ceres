<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class TextSettingFactory
 *
 * Factory class for text setting
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class TextSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType("text");
    }

    /**
     * Determine if the input is a password
     *
     * @param boolean $isPassword
     * @return TextSettingFactory
     */
    public function withPassword($isPassword)
    {
        return $this->withOption('isPassword', $isPassword);
    }

    /**
     * Determine if the input is an IBAN
     *
     * @param boolean $isIBAN
     * @return TextSettingFactory
     */
    public function withIBAN($isIBAN)
    {
        return $this->withOption('isIban', $isIBAN);
    }

    /**
     * Determine if the input is readonly
     *
     * @param boolean $isReadonly
     * @return TextSettingFactory
     */
    public function withReadonly($isReadonly)
    {
        return $this->withOption('isReadonly', $isReadonly);
    }
}
