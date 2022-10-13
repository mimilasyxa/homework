<?php

use Developer\Developer;

class DelphiDeveloper implements Developer
{
    public function writingCode(): string
    {
        return 'Пишет код на Delphi';
    }
}