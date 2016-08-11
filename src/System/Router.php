<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/11
 * Time: 14:17
 */
namespace First\System;

class Router{

    public $controller;
    public $action;

    public function __construct($server){
        //1
        $url = trim($server['REDIRECT_QUERY_STRING'],'/');
        $ca=explode('/',$url);

        //2
        $this->controller = ucfirst($ca[0]);
        echo $this->controller.BR;
        $this->action = $ca[1];
        echo $this->action.BR;


        //4 执行类中的 某个方法
        $className = 'First\\Application\\Controllers\\' . $this->controller.'Controller';
        $class = $className;
        $class->{$this->action.'Action'}();

    }

    //测试自动加载到 本类以及本方法
    public static function test(){
        echo 'System router test'.BR;
    }

    //

}