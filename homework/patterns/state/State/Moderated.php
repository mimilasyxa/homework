<?php

namespace state;

use State;

class Moderated extends State
{
    public function publish()
    {
        $this->context->changeTo(new Published());
    }

    public function moderate()
    {
        return 'Пост уже проверен';
    }
}