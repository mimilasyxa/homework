<?php

class OfficePcFactory implements PcFactory
{

    public function createKeyboard(): Keyboard
    {
        return new OfficeKeyboard();
    }

    public function createMonitor(): Monitor
    {
        return new OfficeMonitor();
    }
}