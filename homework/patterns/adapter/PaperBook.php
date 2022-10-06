<?php

class PaperBook implements Book
{
    public function turnPage(): string
    {
        return "Переворачиваем страницу";
    }

    public function close(): string
    {
        return "Закрываем книгу";
    }
}