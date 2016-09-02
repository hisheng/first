<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/2
 * Time: 17:13
 */
namespace First\Application\Controllers;


class SimpleController{

    // 属性 public 对外可以访问， protected本类父类，子类可以访问， private本类访问
    public $var = 'a default value';
    protected $varprotected = 'a default varprotected';
    private  $varprivate = 'a default varprivate';

    // method declaration
    public function displayVarAction(){
        echo $this->var;
        echo $this->varprotected;
        echo $this->varprivate;
        echo get_class($this);
    }
}