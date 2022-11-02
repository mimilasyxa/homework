<?php

class Worker implements Entity
{
    private float $money;
    public function __construct(float $money)
    {
        $this->money = $money;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitWorker($this);
    }
}