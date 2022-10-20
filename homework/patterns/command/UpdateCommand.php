<?php

namespace command;

class UpdateCommand implements Command
{
    public Database $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function execute(): string
    {
        return $this->database->update();
    }
}