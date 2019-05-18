<?php

function sayHi($name){
    echo 'Привет, '.$name.'! <br>';
    $name = 'Рудь Сергей';
}

$name = 'Андрей';
sayHi($name);
echo $name; // ?




function sayHi2($name){
    echo 'Привет, '.$name.'! <br>';
    global $name; /*начиная с этого момента мы имеем ввиду
//  $GLOBALS['name']
    глобальную переменную $name*/
    $name = 'Рудь Сергей';
}

$name = 'Андрей';
sayHi2($name);
echo $name; // ?