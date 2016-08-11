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

    public function urlParse($server){
        //1
        $url = trim($server['REDIRECT_QUERY_STRING'],'/');

        $ca = explode('/',$url);


        if(count($ca) < 2){
            //当只有 类没有 函数的时候，或者连类都没有的时候
            if(empty($ca[0])){
                $this->controller = 'Welcome';
            }else{
                $this->controller = ucfirst($ca[0]);
            }
            $this->action = 'index';
        }else{
            //2
            $this->controller = ucfirst($ca[0]);
            //echo $this->controller.BR;
            $this->action = $ca[1];
            //echo $this->action.BR;
        }

        //4 执行类中的 某个方法

        $className =  'First\Application\Controllers\\'.$this->controller.'Controller';

        //检查这个类是否存在
        if (class_exists($className)) {
            $class = new $className;
        }else{
            header("HTTP/1.0 404 Not Found");
            exit;
        }

        //检查这个类的方法是否存在
        if(method_exists($class,$this->action.'Action')){
            $class->{$this->action.'Action'}();
        }else{
            header("HTTP/1.0 404 Not Found");
            exit;
        }








    }

    //测试自动加载到 本类以及本方法
    public static function test(){
        echo 'System router test'.BR;
    }

    //

}