<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class CustomValidationRulesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone', function ($attribute, $value, $parameters, $validator) {
            if (!$value) {
                return true;
            }

            $phoneRegex = '/^\([0-9]{2}\)\s[0-9]{4,5}-[0-9]{4}$/';
            $matchs = preg_match($phoneRegex, $value);
            return ($matchs > 0);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
