<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/26
 * Time: 15:39
 */


use \First\Application\Controllers\WelcomeController;

class WelcomeTest extends PHPUnit_Framework_TestCase{
    public $welcome;
    public function __construct(){
        $this->welcome = new WelcomeController();
    }
    public function testIndex(){
        $this->welcome->indexAction();
    }
}