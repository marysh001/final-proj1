<?php
function my_function{
    static $static_variable = 0;
    echo ++$static_variable;
}

for ($i = 0; i<5; i++)
{ my_function();
}