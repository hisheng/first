<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/11
 * Time: 11:07
 */

define('BR','<br/>');
define('DIR',__DIR__);//定义框架所在的目录  绝对路径地址
define('APPLICATION',DIR.DIRECTORY_SEPARATOR.'application'); //定义 application目录的 ，绝对路径地址
define('CONTROLLERS',APPLICATION.DIRECTORY_SEPARATOR.'controllers'); //定义 controllers目录的 ，绝对路径地址
define('SYSTEM',DIR.DIRECTORY_SEPARATOR.'system');
echo DIR.BR;
echo APPLICATION.BR;
echo CONTROLLERS.BR;
echo SYSTEM.BR;
echo SYSTEM.DIRECTORY_SEPARATOR.'Autoload.php';



print_r($_SERVER);


//自动加载类
require SYSTEM.DIRECTORY_SEPARATOR.'Autoload.php';
spl_autoload_register('system\Autoload::loading');




//测试自动加载路由 Router类，成功
system\Router::test();



//解析url路由  到  制定的  php文件，类，和方法