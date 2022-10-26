<?php

namespace Memento;

interface Memento
{
    public function getState(): string;
    public function getDate(): string;
}