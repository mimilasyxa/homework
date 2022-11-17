<?php

class ProgrammerColleague extends Colleague
{
    public function notify(string $message)
    {
        var_dump('Сообщение для программиста ' . $message);
    }
}