<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/26
 * Time: 17:49
 */
namespace Test\Application\Controllers;

use \Test\Application\Controllers\WelcomeTest;

//测试 多重 依赖

class MultipleDependenciesTest extends WelcomeTest{
    public function testProducerFirst(){
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond(){
        $this->assertTrue(true);
        return 'second';
    }


    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer(){
        $this->assertEquals(['first','second'],func_get_args());
    }
}