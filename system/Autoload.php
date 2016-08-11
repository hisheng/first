<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/11
 * Time: 14:20
 */

namespace system;

class Autoload{
    public static function loading($className){
        $fileName = $className.'.php';
        if(is_file($fileName)){
            require $fileName;
        }else{
            echo $fileName . 'is not exit'; die;
        }

    }
}