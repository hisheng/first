<?php

namespace First\Application\Controllers;

class WelcomeController {

    public function indexAction(){

        $redis = new \Redis();
        $redis->connect('127.0.0.1',6379);
        $isShowAD=$redis->hGet('runad', 'isShowAD');
        $userdetail = $redis->zRevRange('userdetail::4',0,-1);


        var_dump($isShowAD);
        var_dump($userdetail);


        echo 'welcome index';


    }

    public function httpAction(){
        \First\System\Http::test();
    }

    // 支持 welcome/hello/3/4 形式的参数
    public function helloAction($hi = null,$h = null){
        //1
        echo 'welcome hello'.$hi.$h;

        //2
        $userid = $_POST['userid'];
        $name = $_POST['name'];
        $version = $_POST['version'];

        //3
        echo $userid.'ss'.$name.'ss'.$version;
    }

    public function usersAction(){

        //报告上面的错误级别
        //1 取得参数

        print_r($_POST);
        $page = $_POST['page'];

        if(empty($page)){
            $page = 0;
        }

        //2 查询数据库

        print_r($page);
    }

}