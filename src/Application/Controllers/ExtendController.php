<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/2
 * Time: 17:31
 */
namespace First\Application\Controllers;

//extends 继承(final没法继承)  和  方法覆盖(parent::访问父级的方法)

class ExtendController extends SimpleController{

    public  $var = 'extend var';

    public function displayVarAction(){
        echo 'extend class';
        //调用父类的方法
        parent::displayVarAction();
    }

    public function indexAction(){
        echo $this->var; // 本类覆盖了
        echo $this->varprotected;

        //self 调用本类的方法
        self::displayVarAction();
        //$this->varprivate;mei没法访问
        //parent::displayVarAction();可以访问到 varprivate

    }
}