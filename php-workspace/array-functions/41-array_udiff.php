<?php

/*
Tanım ve Kullanım
array_udiff() işlevi, iki veya daha fazla diziyi karşılaştırır ve birinci dizide olup diğer dizilerde olmayan değerleri döndürür.
Dikkat! Bu işlev, bir geri çağırma işlevi kullanarak karşılaştırma yapar.
Dikkat! Bu işlev, değerleri karşılaştırır, anahtarları karşılaştırmaz.
array_udiff(array1, array2, array3, ..., myfunction)
array1: Karşılaştırılacak dizilerden biri.
array2: Karşılaştırılacak dizilerden biri.
array3, ...: Karşılaştırılacak dizilerden biri.
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

$result = array_udiff($array1, $array2, "myfunction");

print_r($result);
/* Çıktı:
Array
(
    [b] => green
)
*/