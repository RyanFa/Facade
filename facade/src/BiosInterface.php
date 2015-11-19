<?php
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