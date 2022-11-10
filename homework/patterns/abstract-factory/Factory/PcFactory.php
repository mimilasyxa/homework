<?php

interface PcFactory
{
    public function createKeyboard(): Keyboard;
    public function createMonitor(): Monitor;
}