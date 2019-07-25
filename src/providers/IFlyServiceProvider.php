<?php

namespace IFly\JustDemo\Providers;

use Illuminate\Support\ServiceProvider;
use IFly\JustDemo\IFly;
class IFlyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
        $this->app->singleton("IFly",function (){
            return new IFly();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . "/../views","IFlyView"); // 声明自定义视图模板的命名空间，意思就是在laravel中调用视图时，view("IFlyView::视图名")

        $this->publishes([
            __DIR__ . "/../views/" => resource_path("/views/ifly"), //发布视图目录到laravel的视图目录下
            __DIR__ . "/../config/ifly.php" => config_path("ifly.php"), //发布配置文件到laravel的配置目录中

        ]);
    }



}
