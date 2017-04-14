<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 15:35
 * ioc 容器
 */
namespace First\System;
use First\Contracts\Container\Container as ContainerContract;

abstract class Container implements \ArrayAccess , ContainerContract
{
    //写一个单例
    protected static $instance;
    
    protected $app;//容器 调用 bind绑定
    
    public static function getInstance(){
        if(is_null(static::$instance)){
            static::$instance = new static();
        }
        return static::$instance;
    }
    
    public function bind($abstruct,$classValue){
        if(!isset($this->app[$abstruct])){
            $this->app[$abstruct] = $classValue;
        }
        return true;
    }
    
    public function make($abstruct){
        if(isset($this->app[$abstruct])){
            return $this->app[$abstruct];
        }
        return null;
    }

 
    public function offsetExists($key)
    {
    
    }
    
    /**
     * Get the value at a given offset.
     *
     * @param  string  $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->make($key);
    }
    
    /**
     * Set the value at a given offset.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
    
    }
    
    /**
     * Unset the value at a given offset.
     *
     * @param  string  $key
     * @return void
     */
    public function offsetUnset($key)
    {
    
    }
    
    /**
     * Dynamically access container services.
     *
     * @param  string  $key
     * @return mixed
     */
}