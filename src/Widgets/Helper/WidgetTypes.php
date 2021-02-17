<?php

namespace Ceres\Widgets\Helper;

class WidgetTypes
{
    /** @var string widget type default */
    const DEFAULT = 'default';
    
    /** @var string widget type structure */
    const STRUCTURE = 'structure';
    
    /** @var string widget type static */
    const STATIC = 'static';
    
    /** @var string widget type header */
    const HEADER = 'header';
    
    /** @var string widget type footer */
    const FOOTER = 'footer';
    
    /** @var string widget type item - available on contents of type 'singleitem', 'setitem' and inside of each item set component. */
    const ITEM = 'item';
    
    /** @var string widget type single item - only available on contents of type 'singleitem'. */
    const SINGLE_ITEM = 'singleitem';
    
    /** @var string widget type set item - only available on contents of type 'setitem'. */
    const SET_ITEM = 'setitem';
    
    /** @var string widget type set component - available on contents of type 'singleitem' or inside of each item set component, but not in contents of type 'itemset'. */
    const SET_COMPONENT = 'setcomponent';
    
    /** @var string widget type set component only - available inside of each item set component, but not the contents themselves. */
    const SET_COMPONENT_ONLY = 'setcomponentonly';
    
    /** @var string widget type item content - available on contents of type 'singleitem' or 'setitem' but not inside of each item set component. */
    const ITEM_CONTENT = 'itemcontent';
    
    /** @var string widget type category item. */
    const CATEGORY_ITEM = 'categoryitem';
    
    /** @var string widget type item search. */
    const ITEM_SEARCH = 'itemsearch';
    
    /** @var string widget type toolbar. */
    const TOOLBAR = 'toolbar';
    
    /** @var string widget type navigation. */
    const NAVIGATION = 'navigation';
    
    /** @var string widget type checkout. */
    const CHECKOUT = 'checkout';
    
    /** @var string widget type customer. */
    const CUSTOMER = 'customer';
    
    /** @var string widget type my account. */
    const MY_ACCOUNT = 'myaccount';
    
    /** @var string widget type form. */
    const FORM = 'form';
}
