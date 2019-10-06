<?php

namespace Carmi\CjunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
/**
 *  这个单元测试组件的服务提供者
 *  用来加载sjunit组件的
 *
 * 组件传统的引用的话 composer require xxxxx组件
 * 然而网络OK的情况下是可以在github上下载下来
 *
 * # 配置包路径，注意，这里 `../junit-laravel` 为相对路径，不要弄错了
 *   $ composer config repositories.shineyork path ../../junit-laravel
 *
 *
 */
class CJunitServiceProvider extends ServiceProvider
{

    public function register(){
        //注册组件路由
        $this->registerRoutes();
        //namespace 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(__DIR__.'/../../resources/views','sjunit');
    }


    public function boot(){

    }


    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration(){
        return [
            //定义访问路由的域名
            #'domain' => config('telescope.domain', null),
            //定义路由的命名空间
            'namespace' => 'Carmi\CjunitLaravel\Http\Controllers',
            //前缀
            'prefix' => "sjunit",
            //中间件
            'middleware' => 'web',
        ];
    }

}