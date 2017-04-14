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
    }
    
    
    public function bindRoute(){
        $this->app['route'] = new Router();
    }
    
    public function bindPaths(){
        $this->app['path.system'] = SYSTEM;
        $this->app['path.application'] = APPLICATION;
        $this->app['path.controllers'] = CONTROLLERS;
    }
}
