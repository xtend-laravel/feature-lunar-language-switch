<?php

namespace XtendLunar\Features\LanguageSwitch;

use CodeLabX\XtendLaravel\Base\XtendFeatureProvider;
use Livewire\Livewire;
use XtendLunar\Features\LanguageSwitch\Livewire\Components\LanguageSwitch;

class LanguageSwitchProvider extends XtendFeatureProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminhub');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'adminhub');
    }

    public function boot()
    {
        Livewire::component('hub.components.language-switch', LanguageSwitch::class);
    }
}
