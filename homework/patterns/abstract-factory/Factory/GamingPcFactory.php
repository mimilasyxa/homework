<?php

class GamingPcFactory implements PcFactory
{

    public function createKeyboard(): Keyboard
    {
        return new GamingKeyboard();
    }

    public function createMonitor(): Monitor
    {
        return new GamingMonitor();
    }
}