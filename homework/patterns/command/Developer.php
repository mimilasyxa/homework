<?php

namespace command;

class Developer
{
    public Command $insert;
    public Command $delete;
    public Command $update;
    public Command $select;

    public function __construct(Command $insert, Command $delete, Command $update, Command $select)
    {
        $this->insert = $insert;
        $this->delete = $delete;
        $this->update = $update;
        $this->select = $select;
    }

    public function insert(): string
    {
        return $this->insert->execute();
    }
    public function update(): string
    {
        return $this->update->execute();
    }
    public function delete(): string
    {
        return $this->delete->execute();
    }
    public function select(): string
    {
        return $this->select->execute();
    }

}