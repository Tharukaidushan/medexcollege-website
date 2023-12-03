<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\View;
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
        View::composer('includes.header', function ($view) {
            $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->select(['id', 'name', 'slug'])->get();
            $view->with('categories', $categories);
        });
        View::composer('includes.footer', function ($view) {
            $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->select(['id', 'name', 'slug'])->get();
            $view->with('categories', $categories);
        });
        View::composer('includes.footer', function ($view) {
            $about = About::where('id', 2)->select('short_about')->first();
            $view->with('about', $about);
        });
        View::composer('includes.footer', function ($view) {
            $general = GeneralSettings::find(1);
            $view->with('general', $general);
        });
    }
}
