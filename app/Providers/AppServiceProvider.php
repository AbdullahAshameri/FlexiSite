<?php

namespace App\Providers;

use \App\View\Components\BlogArticleCard;
use App\Models\Footer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        FacadesValidator::extend('filter', function($attribute, $value, $params){
                return ! in_array(strtolower($value), $params);
            },'The value is prohipted!');
            Paginator::useBootstrapFour();

        // مشاركة بيانات الفوتر مع كل الفيوهات
        View::composer('*', function ($view) {
            $footer = Footer::first() ?? new Footer();
            $view->with('footer', $footer);
        });

        // Blade::component('blog-article-card', BlogArticleCard::class);
    }
}
