<?php

class ElectronicBookAdapter implements Book
{
    public function __construct(protected ElectonicBook $book)
    {
    }
    public function turnPage(): string
    {
        return $this->book->nextPage();
    }

    public function close(): string
    {
        return $this->book->turnOff();
    }

}