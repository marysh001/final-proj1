//консоль выдает на первый код: 
Absolute running time: 0.19 sec, cpu time: 0.05 sec, memory peak: 25 Mb, absolute service time: 0,22 sec
bool(true)
int(12345)
bool(false)
bool(true)

//первый  код
<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>

//меняем местами переменные, a=2, b=1
<?php
$a = 1;
$b =2;
$a+=+$b-$b=$a;
var_dump($a);
var_dump($b);
?>