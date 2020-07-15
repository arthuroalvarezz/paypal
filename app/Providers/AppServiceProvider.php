<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Events_Workshops;
use App\Partner;
use App\Precio;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void 
     */
    public function register()
    {
      /*
      $this->app->bind('path.public', function() {
        return base_path('public_html');
    }); */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);

      //Sharing data only with calendar view
      View::composer('index.calendar',function($view)
      {
        $view->with('events',Events_Workshops::getCalendarInfo());
      });
  

      //Sharing data only with workshops view
      View::composer('index.workshops',function($view)
      {
        $view->with('partners',Partner::getPartners());
      });
    }
}
