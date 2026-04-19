<?php

/*
Tanım:
array_diff() işlevi, iki veya daha fazla diziyi karşılaştırır ve ilk dizide bulunan ancak diğer dizilerde bulunmayan değerleri döndürür.
Dikkat! Bu işlev, değerleri karşılaştırır ve anahtarları dikkate almaz.

Kullanım:
array_diff(array1, array2, array3...)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizi.
array3...: İsteğe bağlı. Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "red", "blue", "red");

$array2 = array("a" => "purple", "yellow", "red");

$array3 = array("a" => "purple", "yellow", "blue");

$result = array_diff($array1, $array2, $array3);
print_r($result);
/* Çıktı:
Array
(
    [a] => green
)
*/