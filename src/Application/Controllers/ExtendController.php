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

    public function displayVarAction(){
        echo 'extend class';
        parent::displayVarAction();
    }

    public function indexAction(){

    }
}