<?php

class HomePcFactory implements PcFactory
{

    public function createKeyboard(): Keyboard
    {
        return new HomeKeyboard();
    }

    public function createMonitor(): Monitor
    {
        return new HomeMonitor();
    }
}