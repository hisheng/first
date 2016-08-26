<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/26
 * Time: 17:43
 */
namespace Test\Application\Controllers;

use \Test\Application\Controllers\WelcomeTest;

class DependencyFailureTest extends WelcomeTest{
    public function testOne(){
        $this->assertTrue(false);
    }
    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}