
<?php

//выведет числа 1234 по порядку
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

//выведет 1122 из-за наследования классом А класса Б, функция продолжает работать уже с учетом наследования

class A {
    public function foo() {
    static $x = 0;
    echo ++$x;
    }
    }
    class B extends A {
    }
    $a1 = new A();
    $b1 = new B();
    $a1->foo();
    $b1->foo();
    $a1->foo();
    $b1->foo();