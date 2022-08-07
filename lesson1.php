<?php

    echo "<h2> Задача 1 </h2><br>";

    $a=rand(0, 100);
    $b=rand(0, 100);

    echo "$a + $b =". ($a + $b);

    echo "<h2> Задача 2 </h2><br>";

function Generaterandomstring($lenght=10):string {
    $Characteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $CharacteresLength=strlen($Characteres);
    $randomString = '';
    for ($i = 0; $i < $lenght; $i++) {
        $randomString .= $Characteres[rand(0, $CharacteresLength -1)];
    }
    return $randomString;
    }

    $str_one = Generaterandomstring();
    $str_two = Generaterandomstring(9);

    echo "$str_one + $str_two - " . $str_one . $str_two;

    echo "<h2> Задача 3 </h2><br>";

    $type_animal = "cat";
    $dog = "Шарик";
    $cat = 'Барсик';
    $fish = "Немо";
   

    if ($type_animal == $dog)
    {
        echo "ШАРИК";
    }
    elseif($type_animal == $cat)
    {
        echo "БАРСИК";
    }
    elseif($type_animal == $fish)
    {
        echo "НЕМО";
    }
    else
    {
        echo "ОШИБКА!";
    }