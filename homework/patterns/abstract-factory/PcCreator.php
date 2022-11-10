<?php

class PcCreator
{
    private PcFactory $pcFactory;
    public function __construct(PcFactory $pcFactory)
    {
        $this->pcFactory = $pcFactory;
    }

    public function createKeyboard()
    {
        return $this->pcFactory->createKeyboard();
    }

    public function createMonitor()
    {
        return $this->pcFactory->createMonitor();
    }
}