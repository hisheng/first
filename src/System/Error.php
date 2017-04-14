<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/16
 * Time: 16:04
 */

namespace First\System;

class Error{

    public  function repoartError($environment){
        switch ($environment) {
            case 'development':
                error_reporting(-1);
                break;
            case 'test':
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);
                break;
            case 'product':
                error_reporting(0);
                break;
        }
    }
}