<?php

namespace XtendLunar\Features\LanguageSwitch;

use CodeLabX\XtendLaravel\Base\XtendFeatureProvider;

class LanguageSwitchProvider extends XtendFeatureProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminhub');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'adminhub');
    }

    public function boot()
    {

    }
}
