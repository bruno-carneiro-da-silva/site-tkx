<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\FilterComponent;
use App\View\Components\TruckBodyFilter;
use App\View\Components\RadioRangeFilter;
use App\View\Components\AvailableFreight;
use App\View\Components\FreightDetails;

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
        Blade::component('filter-component', FilterComponent::class);
        Blade::component('truck-body-filter', TruckBodyFilter::class);
        Blade::component('radio-range-filter', RadioRangeFilter::class);
        Blade::component('available-freight', AvailableFreight::class);
        Blade::component('freight-details', FreightDetails::class);

    }
}
