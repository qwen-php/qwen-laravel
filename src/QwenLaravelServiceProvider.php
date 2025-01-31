<?php

namespace Qwen\QwenLaravel;

use Qwen\QwenClient;
use Illuminate\Support\ServiceProvider;
use Qwen\QwenLaravel\Exceptions\ApiKeyIsMissing;

class QwenLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/qwen.php' => config_path('qwen.php'),
            ], 'qwen');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/qwen.php', 'qwen');

        $this->app->singleton('QwenClient', function () {
            $apiKey = config('qwen.api_key');
            $baseUrl = config('qwen.base_url');
            $timeout = config('qwen.timeout');

            if (! is_string($apiKey)) {
                throw ApiKeyIsMissing::create();
            }

            return QwenClient::build($apiKey, $baseUrl, $timeout);
        });
    }
}
