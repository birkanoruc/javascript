<?php

/*
Tanım ve Kullanım
array_intersect() işlevi, iki veya daha fazla dizinin kesişimini döndürür.
Dikkat! Bu işlev, anahtarları dikkate almaz.

array_intersect(array1, array2, array3...)
array1: Karşılaştırılacak diziler.
array2, array3...: Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "red", "blue", "red");

$array2 = array("b" => "green", "yellow", "red");

$array3 = array("c" => "green", "yellow", "blue");

$result = array_intersect($array1, $array2, $array3);

print_r($result);
// Çıktı: Array ( [a] => green )