<?php

namespace template;

class TeslaBuilder extends Builder
{
    public function addEngine()
    {
        return 'Electric engine';
    }

    public function installChassis()
    {
        return 'Tesla Chassis';
    }

    public function installAccessories()
    {
        return 'Tesla Accessories';
    }
}