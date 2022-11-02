<?php

namespace state;

use State;

class Created extends State
{

    public function publish()
    {
        return 'Нельзя запостить не пройдя модерацию';
    }

    public function moderate()
    {
        $this->context->changeTo(new Moderated());
    }
}