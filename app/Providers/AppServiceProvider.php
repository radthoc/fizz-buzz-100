<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\FizzBuzzServiceInterface',
            'App\Services\FizzBuzzService'
        );

        $this->app->bind(
            'App\Helpers\NumbersHelperInterface',
            'App\Helpers\NumbersHelper'
        );

        $this->app->bind(
            'App\Services\Rules\RulesProviderInterface',
            'App\Services\Rules\RulesProvider'
        );

        $this->app->bind(
            'App\Services\Rules\RuleInterface',
            'App\Services\Rules\FizzRule'
        );

        $this->app->bind(
            'App\Services\Rules\RuleInterface',
            'App\Services\Rules\BuzzRule'
        );

        $this->app->bind(
            'App\Services\Rules\RuleInterface',
            'App\Services\Rules\FizzBuzzRule'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
