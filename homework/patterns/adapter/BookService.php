<?php

class BookService
{
    public function readBook(): void
    {
        $book = new Book();
        $book->turnPage(); // "Переворачиваем страницу"
        $book->close(); // "Закрываем книгу"

        $electronicBook = new ElectonicBook();
        $electronicBook->nextPage(); // "Нажимаем на кнопку следующая страница"
        $electronicBook->turnOff(); // "Выключаем книгу"

        $adaptedBook = new ElectronicBookAdapter($electronicBook);
        $adaptedBook->turnPage(); // Используем метод от интерфейса Book но внутри делегируем задачу на метод nextpage() объекта класса ElectronicBook
        $adaptedBook->close(); // Используем метод от интерфейса Book но внутри делегируем задачу на метод turnOff() объекта класса ElectronicBook

    }
}

/*
 * Но зачем? Паттерн решает проблему когда у нас есть определённый класс, требуется чтобы этот класс реализовывал интерфейс
 * но при этом сам класс менять нельзя. Т.е. "тупо" переписать его методы и продолжить дальше работать нельзя
 *
 * Когда подобное может случиться? Когда над проектом работает больше одного человека или
 *
 *
 *
 *
 */

//Привести нестандартный или неудобный интерфейс какого-то класса в интерфейс, совместимый с вашим кодом.
//Адаптер позволяет классам работать вместе стандартным образом, что обычно не получается из-за несовместимых интерфейсов,
//предоставляя для этого прослойку с интерфейсом, удобным для клиентов, самостоятельно используя оригинальный интерфейс