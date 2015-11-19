<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/11/19
 * Time: 下午9:33
 */

namespace ryan\facade\test;
use ryan\facade\Facade as Computer;
use ryan\facade\OsInterface;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * show example of facade
     */
    public function getComputer()
    {

        // 指定function製作bios替身
        $bios = $this->getMockBuilder('ryan\facade\BiosInterface')
                     ->setMethods(['execute', 'launch', 'waitForKeyPress'])
                     ->disableAutoload()
                     ->getMock();

        // 指定function製作os替身
        $os = $this->getMockBuilder('ryan\facade\OsInterface')
            ->setMethods(['getName'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
             ->method('launch')
             ->with($os);

        $os ->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));

        $facade = new Computer($bios, $os);
        return array(array($facade, $os));
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, OsInterface $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }
}
