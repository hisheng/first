<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 15:45
 */
namespace First\System;
class Application extends Container
{
    public function __construct()
    {
        $this->bindRoute();//初始化路由类
        $this->bindPaths();//初始化路径
        $this->bindError();//初始化错误
    }
    
    
    public function bindRoute(){
        $this->app['route'] = new Router();
    }
    
    public function bindPaths(){
        $this->app['path.system'] = SYSTEM;
        $this->app['path.application'] = APPLICATION;
        $this->app['path.controllers'] = CONTROLLERS;
    }
    
    public function bindError(){
        $this->app['error'] = new  Error();
        
    }
    
    public function execute(){
        // 1 解析url路由  到  制定的  php文件，类，和方法
        $router = $this->make('route');
        $router->urlParse($_SERVER);
        //2 报告错误
        $error = $this->make('error');
        $error->repoartError(ENVIRONMENT);
    }
}
