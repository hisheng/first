<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 15:35
 */
namespace First\System;
abstract class Container implements \ArrayAccess
{
    //写一个单例
    protected static $instance;
    
    public static function getInstance(){
        if(is_null(static::$instance)){
            static::$instance = new static();
        }
        return static::$instance;
    }
}