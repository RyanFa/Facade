<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/11/19
 * Time: 下午9:21
 */

namespace ryan\facade;

interface BiosInterface
{
    /**
     * execute Bios
     */
    public function execute();

    /**
     * wait for halt
     */
    public function waitForKeyPress();

    /**
     * launch os
     */
    public function launch();

    /**
     * power down Bios
     */
    public function powerDown();
}