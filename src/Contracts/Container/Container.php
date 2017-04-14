<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 17:11
 */
namespace First\Contracts\Container;
interface Container
{
    public function bind();//写进容器
    
    public function make();//从容器去除
}