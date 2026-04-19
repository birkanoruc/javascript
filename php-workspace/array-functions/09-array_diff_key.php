<?php

/*
Tanım:
array_diff_key() işlevi, iki diziyi karşılaştırır ve ilk dizide bulunan ancak diğer dizide bulunmayan anahtarları döndürür.
Dikkat! Bu işlev, anahtarları karşılaştırır ve değerleri dikkate almaz.

Kullanım:
array_diff_key(array1, array2, array3...)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizi.
array3...: İsteğe bağlı. Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$array3 = array("a" => "green", "yellow", "blue");

$result = array_diff_key($array1, $array2, $array3);
print_r($result);
/* Çıktı: 
Array
(
    [b] => brown
    [c] => blue
)
*/