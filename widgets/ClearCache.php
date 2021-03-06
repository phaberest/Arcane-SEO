<?php

namespace Arcane\Seo\Widgets;

use Backend\Classes\WidgetBase;

/**
 * Minify Form Widget
 */
class ClearCache extends WidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'arcane_seo_clear_cache';

    /**
     * @inheritDoc
     */
    public function render()
    {
        return $this->makePartial('clearcache');
    }

    public function onClearCache()
    {
        \Storage::deleteDirectory('arcane/seo/minify');
        \Flash::success('Cache cleared');
    }
}
