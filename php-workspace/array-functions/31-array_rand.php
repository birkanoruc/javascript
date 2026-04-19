<?php

/*
Tanım ve Kullanım
array_rand() işlevi, bir diziden rastgele bir veya daha fazla anahtar döndürür.
array_rand(array, number)
array: Girdi dizisi.
number: Döndürülecek anahtar sayısı. Bu parametre belirtilmezse, yalnızca bir anahtar döndürülür.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

$random_keys = array_rand($names, 3);

print_r($random_keys);

foreach ($random_keys as $key) {
    echo $names[$key] . "\n";
}
