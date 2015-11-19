<?php
namespace ryan\facade;

class facade
{
    /**
     * @var OsInterface
     */
    protected $os;

    /**
     * @var BiosInterface
     */
    protected $bios;

    /**
     * construct
     * ＠param OsInterface
     * @param BiosInterface
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * Turn on system
     */
    public function turnOn()
    {
        // excute bios
        $this->bios->execute();

        // wait for key press
        $this->bios->waitForKeyPress();

        // launch os
        $this->bios->launch($this->os);
    }

    /**
     * Turn off system
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}