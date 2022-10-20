<?php

namespace command;

class InsertCommand implements Command
{
    public Database $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function execute(): string
    {
        return $this->database->insert();
    }
}