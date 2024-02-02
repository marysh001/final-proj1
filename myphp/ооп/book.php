<?php
class Book{
    public string $name;
    public int $pages;
    public string $color;

}

function __construct{string $name, int $pages, string $color} {
    $this->name - $name;
    $this->pages - $pages
    $this->color - $color
}

function findBook(): string{
    return "найдена книга {$this->name} количество страниц: {$this->pages}, цвета:{$this->color}. \r\n";
}

$books = [
new Book("Три Мушкетера", 672, "красный")
new Book("Война и мир", 456, "голубой")
];

foreach($bookss as $book) {
    echo $book->findBook();
}

Class Shelf extends Book{
    
    public function __construct(int $shelf, array $books[]) {
        parent::__construct($shelf, ['name']);
        
    }
public function findShelf()
}
}