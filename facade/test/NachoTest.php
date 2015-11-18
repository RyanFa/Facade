<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/11/19
 * Time: 上午12:41
 */

namespace ryan\facade;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testNachHasCheese()
    {
        $nacho = new Nacho;
        $this->assertTrue($nacho->hasCheese());
    }
}
