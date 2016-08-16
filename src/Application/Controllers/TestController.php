<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/16
 * Time: 17:03
 */
namespace First\Application\Controllers;

use \First\System\Http;

class TestController{
    public $http;
    public $url;
    public $parm = array();

    public function __construct(){

        $this->http = new Http();

        $this->url = 'http://localhost/first/welcome/';

    }

    public function indexAction(){
        $url = $this->url;
        $parm = $this->parm;

        $index = $this->http->get($url.'index',$parm);
        var_dump($index);

        $hello = $this->http->get($url.'hello/3/4',$parm);
        var_dump($hello);

        $users = $this->http->get($url.'users',$parm);
        var_dump($users);
    }
}