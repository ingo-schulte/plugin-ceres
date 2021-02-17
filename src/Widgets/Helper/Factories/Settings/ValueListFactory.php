<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

/**
 * Class ValueListFactory
 *
 * Factory class for value lists.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class ValueListFactory
{
    private $valueList;

    /**
     * Create a new instance of a value list factory.
     *
     * @return ValueListFactory
     */
    public static function make()
    {
        /** @var ValueListFactory $instance */
        $instance = pluginApp(ValueListFactory::class);
        return $instance;
    }

    /**
     * Add an entry to the list.
     *
     * @param $value
     * @param $caption
     * @return ValueListFactory
     */
    public function addEntry($value, $caption)
    {
        $this->valueList[] = [
            'value' => $value,
            'caption' => $caption
        ];
        return $this;
    }
    
    /**
     * Return the factory as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        return $this->valueList;
    }
}
