<?php

class CustomerColleague extends Colleague
{
    public function notify(string $message)
    {
        var_dump('Сообщение для заказчика ' . $message);
    }
}