<?php

namespace command;

class Database
{
    public function insert()
    {
        return 'Тут вставляем запись в бд.';
    }
    public function delete()
    {
        return 'Тут удаляем запись из бд.';
    }
    public function update()
    {
        return 'Тут обновляем запись в бд.';
    }
    public function select()
    {
        return 'Тут выбираем запись из бд.';
    }
}