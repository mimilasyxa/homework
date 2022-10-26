<?php

namespace template;

class BmwBuilder extends Builder
{
    public function addEngine()
    {
        return 'Gasoline engine';
    }

    public function installChassis()
    {
        return 'BMW Chassis';
    }

    public function installAccessories()
    {
        return 'BMW Accessories';
    }
}