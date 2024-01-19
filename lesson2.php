//упражнение 1. 

//cложение

<?php
function foo($x, $y);
{
    echo ($x+$y). "\n";
    return $retval;
}
?>

//умножение

<?php
function foo($x, $y);
{
    echo ($x*$y). "\n";
    return $retval;
}
?>

//деление с условием деления на 0

<?php

function foo($x, $y);
{
if ($x==0 or $y==0) echo 0;

else
echo ($x/$y). "\n";

return $retival;
}
?>

//вычитание с условием меньшего числа

<?php
function foo($x, $y)
{
if ($x > $y) echo ($x-$y)."\n";

else

echo ($y-$x)."\n";
}
?>

//упражнение 2.

<?php
function operation($arg1,$arg2)
{
if ($arg1 < $arg2) echo case 1;
if ($arg1 == $arg2) echo case 2 ;
if ($arg1 > $arg2) echo case 3;


switch ($arg1,$arg2) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;

    default:
        echo "error";
}
}

echo match ($arg1,$arg2) {
1=>($arg2-$arg1)."\n";
2=>($arg1 * $arg2)."\n";
3=>($arg1 + $arg2)."\n";
    default => "error",
};

//упражнение 3.

$obl = ['Московская область' => ['Мытищи', 'Звенигород', 'Подольск'], 'Ленинградская область' => ['Гатчина', 'Всеволожск', 'Кронштадт']];
foreach ($obl as $key => $value) {
echo '< br >'.$key.':< br >';
foreach ($value as $key => $value) {
echo $value.'< br >';
}
}
echo '< br >';
foreach ($obl as $key => $value) {
echo '< br >'.$key.':< br >';
foreach ($value as $key => $value) {
if(mb_substr($value, 0, 1) == 'К') {
echo $value;
}
}
}