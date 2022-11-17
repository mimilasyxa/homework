<?php

interface Mediator
{
    public function send(string $string, Colleague $colleague);
}