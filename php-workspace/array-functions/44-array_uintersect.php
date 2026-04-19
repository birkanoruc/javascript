<?php

/*
Tanım:
array_uintersect() işlevi, iki veya daha fazla diziyi karşılaştırır ve bu dizilerde ortak olan değerleri döndürür.
Dikkat! Bu işlev, değerleri karşılaştırır, anahtarları karşılaştırmaz.

Kullanım:
array_uintersect(array1, array2, array3..., myfunction)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizilerden biri.
array3, ...: İsteğe bağlı: Karşılaştırılacak dizilerden bir başkası.
myfunction: Karşılaştırma işlemi sırasında kullanılacak geri çağırma işlevi.
*/

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "red", "b" => "green", "c" => "blue");

$array2 = array("a" => "red", "c" => "black", "d" => "blue");

$result = array_uintersect($array1, $array2, "myfunction");

print_r($result);
/* Çıktı:
Array
(
    [a] => red
    [c] => blue
)
*/
