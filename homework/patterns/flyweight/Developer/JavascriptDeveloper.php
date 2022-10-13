<?php

use Developer\Developer;

class JavascriptDeveloper implements Developer
{

    public function writingCode(): string
    {
        return 'Пишет код на JS';
    }
}