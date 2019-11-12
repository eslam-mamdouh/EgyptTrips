<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Slider;
use App\Models\TripsDistination;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
         $sliders = Slider::where('enabled' , true)->get();
         $distinations = TripsDistination::limit(3)->get();
        //  dd($distinations);
          view()->share('sliders', $sliders);
          view()->share('distinations', $distinations);
    }
}
