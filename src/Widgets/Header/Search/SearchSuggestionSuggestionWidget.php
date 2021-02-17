<?php

namespace Ceres\Widgets\Header\Search;

/**
 * Class SearchSuggestionSuggestionWidget
 *
 * Widget class to provide data and settings for the search suggestion suggestion widget.
 *
 * @package Ceres\Widgets\Header\Search
 */
class SearchSuggestionSuggestionWidget extends SearchSuggestionBaseWidget
{
    /** @inheritDoc */
    public $suggestionType = 'suggestion';
    
    /** @inheritDoc */
    public $widgetKey = 'Ceres::SearchSuggestionSuggestionWidget';
    
    /** @inheritDoc */
    public $widgetLabel = 'Widget.searchSuggestionSuggestionLabel';
    
    /** @inheritDoc */
    public $previewImageUrl = '/images/widgets/search-suggestion-suggestion.svg';
    
    /** @inheritDoc */
    public $headline = 'Ceres::Template.itemSearchSuggestion';
    
    /** @inheritDoc */
    public $position = 300;
    
    /** @inheritDoc */
    public $hasCountOption = true;
}
