<?php

/*
Tanım ve Kullanım
array_intersect_ukey() işlevi, iki veya daha fazla dizinin anahtarlarını karşılaştırır ve ortak anahtarları içeren bir dizi döndürür.
Dikkat! Bu işlev, bir geri çağırma işlevi kullanarak anahtarlar arasında karşılaştırma yapar.
Dikkat! Bu işlev, değerleri dikkate almaz.

array_intersect_ukey(array1, array2, array3..., myfunction)
array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizi.
array3...: İsteğe bağlı: Karşılaştırılacak diğer diziler.
myfunction: Karşılaştırma işlemi sırasında kullanılacak geri çağırma işlevi.
*/

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$result = array_intersect_ukey($array1, $array2,  "myfunction");

print_r($result);
/* Çıktı:
Array
(
    [a] => green
    [0] => red
)
*/