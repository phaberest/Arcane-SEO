<?php

namespace Arcane\Seo\Models;

use Model;

class Settings extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'site_name',
        'site_description',
        'extra_meta',
        'site_image',
        'og_locale',
    ];

    // A unique code
    public $settingsCode = 'arcane_seo_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    protected $cache = [];

    public function getPageOptions()
    {
        return \Cms\Classes\Page::getNameList();
    }

    public function initSettingsData()
    {
        $this->htaccess = \File::get(base_path(".htaccess"));
    }
}
