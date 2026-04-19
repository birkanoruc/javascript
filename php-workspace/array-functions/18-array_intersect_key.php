<?php

/*
Tanım ve Kullanım
array_intersect_key() işlevi, iki veya daha fazla dizinin anahtarlarını karşılaştırır ve ortak anahtarları içeren bir dizi döndürür.
Dikkat! Bu işlev, değerleri dikkate almaz.

array_intersect_key(array1, array2, array3...)
array1: Karşılaştırılacak diziler.
array2, array3...: Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
print_r($array1);
/* Çıktı:
Array
(
    [a] => green
    [b] => brown
    [c] => blue
    [0] => red
)
*/

$array2 = array("a" => "brown", "yellow", "red");
print_r($array2);
/* Çıktı:
Array
(
    [a] => brown
    [0] => yellow
    [1] => red
)
*/

$array3 = array("a" => "green", "yellow", "blue");
print_r($array3);
/* Çıktı:
Array
(
    [a] => green
    [0] => yellow
    [1] => blue
)
*/

$result = array_intersect_key($array1, $array2, $array3);

print_r($result);
/* Çıktı:
Array
(
    [a] => green
    [0] => red
)
*/