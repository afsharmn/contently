<?php

namespace Afsharmn\Contently;

use Illuminate\Support\ServiceProvider;

class ContentlyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind a singleton into Laravel's container
        $this->app->singleton('contently', function () {
            return new ContentlyManager();
        });
    }

    public function boot(): void
    {
        // Later you can publish config, migrations, views, etc.
    }
}
