<?php

use Author\Author;
use Book\Book;

class BookService
{
    public function copyBook(Book $book): Book
    {
        return clone $book; // Книжка будет отличаться
    }

    public function create()
    {
        $author = new Author('Egor');

        return new Book($author, 'Смысол жизни', '2022');
    }
}

/**
 * В пхп нам повезло и у нас есть клонирование объектов,
 * достаточно прописать метод __clone поменяв логику если нужно
 */