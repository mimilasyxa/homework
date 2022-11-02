<?php

namespace state;

use State;

class Published extends State
{
    public function publish()
    {
        return 'Пост уже опубликован';
    }

    public function moderate()
    {
        return 'Пост уже прошёл модерацию';
    }
}