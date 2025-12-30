<?php

namespace Afsharmn\Contently;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ContentlyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('contently', function () {
            return new ContentlyManager();
        });

    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contently');

        Blade::directive('contentlyCss', function () {
            return <<<'PHP'
            <?php if (!isset($__contently_css_loaded)): $__contently_css_loaded = true; ?>
            <style><?php echo \Afsharmn\Contently\Support\Assets::css(); ?></style>
            <?php endif; ?>
            PHP;
        });

        Blade::directive('contentlyJs', function () {
            return <<<'PHP'
            <?php if (!isset($__contently_js_loaded)): $__contently_js_loaded = true; ?>
            <script><?php echo \Afsharmn\Contently\Support\Assets::js(); ?></script>
            <?php endif; ?>
            PHP;
        });

    }
}
