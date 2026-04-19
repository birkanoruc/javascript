<?php

/*
Tanım:
array_diff_assoc() işlevi, iki veya daha fazla diziyi karşılaştırır ve ilk dizide bulunan ancak diğer dizilerde bulunmayan değerleri döndürür. 
Dikkat! Bu işlev, değerlerin yanı sıra anahtarları da karşılaştırır.

Kullanım:
array_diff_assoc(array1, array2, array3...)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizi.
array3...: İsteğe bağlı. Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$array3 = array("a" => "green", "yellow", "blue");

$result = array_diff_assoc($array1, $array2, $array3);
print_r($result);
/* Çıktı:
Array
(
    [b] => brown
    [c] => blue
    [0] => red
)
*/