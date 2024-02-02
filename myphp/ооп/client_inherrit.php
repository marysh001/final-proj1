<?php
class Person{
    public string $surname;
    public array $borrow[];

    public function __construct(string $surname, array $borrow[]);
    {
        $this->surname - $surname;
        $this->borrow - $borrow;
      
    }
    
   public function checkBorrow(string $book){
        return in_array($book, this->borrow);
    }
    
Class Client extends Person{
    
    public function __construct(string $surname, array $borrow[]) {
        parent::__construct($surname, ['name', 'date']);
        
    }
public function findWhoTook()
}

}