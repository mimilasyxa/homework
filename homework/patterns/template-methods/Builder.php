<?php

namespace template;

abstract class Builder
{
    public function build()
    {
        $this->addEngine();
        $this->installChassis();
        $this->installAccessories();
    }
}