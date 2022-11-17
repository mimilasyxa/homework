<?php

class TesterColleague extends Colleague
{
    public function notify(string $message)
    {
        var_dump('Сообщение для тестера ' . $message);
    }
}