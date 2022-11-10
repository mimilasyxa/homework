<?php

class Car implements Product
{
    public function drive(): string
    {
        return 'Водим машину';
    }
}