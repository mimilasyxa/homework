<?php

interface Strategy
{
    public function createRoad(array $roadPoints): string;
}