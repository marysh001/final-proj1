<?php
class AbstractBook{
    protected string $name;
    protected string $color;
    protected array $authors;
    protected string $releaseDate;

    protected string $preview;



    abstract function recycleBook(): void;

    abstract function addBook(): void;

    abstract function getBook(): AbstractBook;

    abstract function returnBook(AbstractBook $book): void;

}

$book = new Book();
$book->getBook()->returnBook($book);



class Book extends AbstractBook
{

    protected int $pageCount;

    public function getBook(): Book
    {


        return $this;

    }

    public function returnBook(AbstractBook $book): void
    {


    }

    public function recycleBook(): void
    {

    }

    public function addBook(): void
    {


    }

}

class DigitalBook extends AbstractBook
{

    private string $bookURL;

    public function getBook(): DigitalBook
    {


        $this->getURL();


        return $this;

    }

    public function returnBook(AbstractBook $book): void
    {


    }

    public function getURL(): string
    {

        return $this->bookURL;

    }

    public function recycleBook(): void
    {


    }

    public function addBook(): void
    {


    }

}