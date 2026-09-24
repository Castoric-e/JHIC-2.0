<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $start = microtime(true);

    app()->terminating(function () use ($start) {
        $time = (microtime(true) - $start) * 1000;

        Log::info('REQUEST TOTAL TIME', [
            'time_ms' => round($time, 2),
        ]);
    });
        if (
            config('app.env') === 'production' ||
            app()->environment('production') ||
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
            request()->header('x-forwarded-proto') === 'https' ||
            (!in_array(request()->getHost(), ['127.0.0.1', 'localhost']) && !app()->isLocal())
        ) {
            URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS', 'on');
            if (request()->getHost()) {
                $currentHost = request()->schemeAndHttpHost();
                URL::forceRootUrl($currentHost);
                config(['app.url' => $currentHost]);
                config(['app.asset_url' => $currentHost]);
                Vite::useAssetUrl($currentHost . '/build');
            }
        }
    }
}

