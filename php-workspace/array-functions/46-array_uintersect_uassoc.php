<?php

/*
Tanım:
array_uintersect_uassoc() işlevi, iki veya daha fazla diziyi karşılaştırır ve bu dizilerde ortak olan değerleri ve anahtarları döndürür.
Dikkat! Bu işlev, değerleri ve anahtarları karşılaştırır.
Dikkat! Bu işlev, karşılaştırma işlemi sırasında iki geri çağırma işlevi kullanır.

Kullanım:
array_uintersect_uassoc(array1, array2, array3..., myfunction1, myfunction2)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizilerden biri.
array3, ...: İsteğe bağlı: Karşılaştırılacak dizilerden bir başkası.
myfunction1: Karşılaştırma işlemi sırasında kullanılacak geri çağırma işlevi.
myfunction2: Karşılaştırma işlemi sırasında kullanılacak geri çağırma işlevi.
*/

function myfunction1($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function myfunction2($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "red", "b" => "green", "c" => "blue");

$array2 = array("a" => "red", "c" => "black", "d" => "blue");

$result = array_uintersect_uassoc($array1, $array2, "myfunction1", "myfunction2");

print_r($result);
/* Çıktı:
Array
(
    [a] => red
)
*/