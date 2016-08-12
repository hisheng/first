<?php

namespace First\Application\Controllers;

class WelcomeController {

    public function indexAction(){
        echo 'welcome index';
    }

    // 支持 welcome/hello/3/4 形式的参数
    public function helloAction($hi = null,$h = null){
        echo 'welcome hello'.$hi.$h.BR;
        $userid = $_POST['userid'];
        $name = $_POST['name'];
        $version = $_POST['version'];

        echo $userid.'ss'.$name.'ss'.$version;
    }

}