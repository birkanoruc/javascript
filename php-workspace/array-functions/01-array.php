<?php

/*
Tanım:
array() fonksiyonu bir dizi oluşturmak için kullanılır.

Kullanım:
PHP'de üç tür dizi vardır:

Indexed arrays: İndeksli diziler, sayısal indekslerle erişilen dizilerdir. Bu indeksler 0'dan başlar.
array(value1, value2, value3, etc.)

Associative arrays: İlişkili diziler, anahtarlarla erişilen dizilerdir. Bu anahtarlar bir dize veya bir sayı olabilir.
array(key => value, key => value, key => value, etc.)

Multimensional arrays: Çok boyutlu diziler, bir veya daha fazla dizi içeren dizilerdir.
array(array(value1, value2, value3), array(value1, value2, value3), array(value1, value2, value3), etc.)
*/

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// Çıktı: I like Volvo, BMW and Toyota.

$persons = array("John" => "35", "Doe" => "40", "Smith" => "45");
echo "John is " . $persons['John'] . " years old.";
// Çıktı: John is 35 years old.

$carModels = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
echo $carModels[0][0] . ": In stock: " . $carModels[0][1] . ", sold: " . $carModels[0][2] . "."; 
// Çıktı: Volvo: In stock: 22, sold: 18.