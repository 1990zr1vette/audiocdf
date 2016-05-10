<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials.header', 'App\Composers\HeaderComposer');
		view()->composer('layouts.partials.footer', 'App\Composers\FooterComposer');
		view()->composer('layouts.partials.announcements', 'App\Composers\AnnouncementsComposer');
		
		view()->composer('layouts.partials.mobileheader', 'App\Composers\MobileHeaderComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}