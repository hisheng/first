<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/11
 * Time: 11:07
 */
define('ENVIRONMENT','development');



define('BR','<br/>');
define('DIR',__DIR__);//定义框架所在的目录  绝对路径地址
define('APPLICATION',DIR.DIRECTORY_SEPARATOR.'Application'); //定义 application目录的 ，绝对路径地址
define('CONTROLLERS',APPLICATION.DIRECTORY_SEPARATOR.'Controllers'); //定义 controllers目录的 ，绝对路径地址
define('SYSTEM',DIR.DIRECTORY_SEPARATOR.'System');
//echo DIR.BR;
//echo APPLICATION.BR;
//echo CONTROLLERS.BR;
//echo SYSTEM.BR;

//print_r($_SERVER);

//测试自动加载路由 Router类，成功
include 'vendor/autoload.php';




/*$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$isShowAD=$redis->hGet('runad', 'isShowAD');
var_dump($isShowAD);*/


//接入 错误报告 类型
\First\System\Error::repoartError(ENVIRONMENT);

//解析url路由  到  制定的  php文件，类，和方法
$router = new First\System\Router;
$router->urlParse($_SERVER);





