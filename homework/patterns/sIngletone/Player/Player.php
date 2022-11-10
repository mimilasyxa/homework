<?php

class Player
{
    private float $health;
    private static array $instances = [];
    protected function __clone(){}
    protected function __wakeup(){}
    protected function __construct()
    {
        $this->health = 100;
    }

    public static function getInstance(): Player
    {
        $thisClass = static::class;
        if (!isset(self::$instances[$thisClass])) {
            self::$instances[$thisClass] = new static();
        }

        return self::$instances[$thisClass];
    }

    public function damage(float $damage): void
    {
        $this->health -= $damage;
    }

    public function getHealth(): float
    {
        return $this->health;
    }
}