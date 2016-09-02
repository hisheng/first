<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/2
 * Time: 17:13
 */
namespace First\Application\Controllers;


class SimpleController{

    // property
    public $var = 'a default value';

    // method declaration
    public function displayVarAction(){
        echo $this->var;
        echo get_class($this);
    }
}