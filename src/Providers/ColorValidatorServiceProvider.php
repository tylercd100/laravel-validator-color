<?php namespace Zenapply\Validator\Providers;

use Illuminate\Support\ServiceProvider;
use Zenapply\Validator\Validators\ColorValidator;

class ColorValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('validator', function ($factory, $app) {
            
            $colorValidator = new ColorValidator();

            $factory->extend('color', function($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColor($value);
            });
        });
    }
}