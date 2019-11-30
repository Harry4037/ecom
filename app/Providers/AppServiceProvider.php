<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Banner;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        view()->composer('*', function($view) {
            $categories = Category::with([
                        "subcategories" => function($query) {
                            $query->with('subsubcategories');
                        }
                    ])->where(["is_active" => "1", "deleted_at" => NULL])->get();
            $banners = Banner::where(["is_active" => "1", "deleted_at" => NULL])->get();
            $view->with(['banners' => $banners, "categories" => $categories]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

}
