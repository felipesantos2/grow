<?php

namespace felipesantos2\Grow;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GrowServideProvider extends ServiceProvider
{
    public function boot()
    {
        // Register Blade directive
        Blade::directive('shout', function ($expression) {
            return "<?php echo strtoupper($expression); ?>";
        });

        // Load helper file
        $this->loadHelpers();
    }

    public function register()
    {
    }

    protected function loadHelpers(): void
    {
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }
}
