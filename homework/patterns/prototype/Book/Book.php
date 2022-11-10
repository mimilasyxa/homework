<?php

namespace Book;
use Author\Author;

class Book
{
    private Author $author;
    private string $title;
    private bool $isOriginal;
    private int $year;
    private string $date;
    public function __construct(Author $author, string $title, int $year)
    {
        $this->author = $author;
        $this->title = $title;
        $this->year = $year;
        $this->date = time();
        $this->isOriginal = true;
    }

    public function __clone()
    {
        $this->title = 'Copy of ' . $this->title;
        $this->date = time();
        $this->isOriginal = false;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}