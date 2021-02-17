<?php

namespace Ceres\Widgets\Helper\Factories;

/**
 * Class PresetWidgetFactory
 *
 * Factory class for widget presets.
 *
 * @package Ceres\Widgets\Helper\Factories
 */
class PresetWidgetFactory
{
    /** @var string $identifier Unique identifier of the widget. */
    public $identifier = "";

    /** @var array $settings The settings of the preset. */
    public $settings = [];

    /** @var array $children Child instances of preset widget factories. */
    public $children = [];

    /**
     * Create a specific setting for the factory.
     *
     * @param string $key The key of the setting.
     * @param mixed $valueMobile The value of the setting for mobile.
     * @param mixed $valueTablet The value of the setting for tablet.
     * @param mixed $valueDesktop The value of the setting for desktop.
     * @param mixed $valueLargeDesktop The value of the setting for large desktop.
     * @return PresetWidgetFactory
     */
    public function withSetting($key, $valueMobile, $valueTablet = null, $valueDesktop = null, $valueLargeDesktop = null )
    {
        $this->mergeValue($this->settings, $key, [
            'mobile'        => $valueMobile,
            'tablet'        => $valueTablet ?? $valueMobile,
            'desktop'       => $valueDesktop ?? $valueMobile,
            'largeDesktop'  => $valueLargeDesktop ?? $valueMobile
        ]);

        return $this;
    }


    /**
     * Create a child widget.
     *
     * @param string $dropzone The dropzone to put the widget into.
     * @param string $identifier Unique identifier of the child widget.
     * @return PresetWidgetFactory
     */
    public function createChild($dropzone, $identifier)
    {
        /** @var PresetWidgetFactory $childWidgetFactory */
        $childWidgetFactory = pluginApp(PresetWidgetFactory::class);
        $childWidgetFactory->identifier = $identifier;

        if ( !array_key_exists($dropzone, $this->children) )
        {
            $this->children[$dropzone] = [];
        }
        $this->children[$dropzone][] = $childWidgetFactory;

        return $childWidgetFactory;
    }

    /**
     * Merge multiple values.
     *
     * @param mixed $obj The object to be merged into.
     * @param string $key The key to be merged.
     * @param mixed $value The value to be merged.
     */
    private function mergeValue(&$obj, $key, $value)
    {
        $keyList = explode(".", $key );
        $nextKey = array_shift($keyList);
        if ( !is_null($nextKey) )
        {
            if ( count($keyList) )
            {
                $this->mergeValue($obj[$nextKey], implode(".", $keyList), $value );
            }
            else
            {
                $obj[$nextKey] = $value;
            }
        }
    }
    
    /**
     * Transform the class object to array.
     *
     * @return array
     */
    public function toArray()
    {
        $children = [];
        foreach( $this->children as $dropzone => $childList )
        {
            $children[$dropzone] = [];
            /** @var PresetWidgetFactory $child */
            foreach($childList as $child)
            {
                $children[$dropzone][] = $child->toArray();
            }
        }
        return [
            'identifier'     => $this->identifier,
            'widgetSettings' => $this->settings,
            'children'       => $children
        ];
    }
}
