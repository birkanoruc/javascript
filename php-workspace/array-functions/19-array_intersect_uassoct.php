<?php

/*
Tanım ve Kullanım
array_intersect_uassoc() işlevi, iki veya daha fazla dizinin anahtarlarını ve değerlerini karşılaştırır ve eşleşen öğeleri döndürür. 
Dikkat! Bu işlev, bir geri çağırma işlevi kullanarak anahtarlar ve değerler arasında karşılaştırma yapar.
Dikkat! Bu işlev, değerleri ve anahtarları dikkate alır.

array_intersect_uassoc(array1, array2, array3..., myfunction)
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

$array1 = array("a" => "green", "b" => "red", "blue");

$array2 = array("a" => "green", "b" => "yellow", "red");


$result = array_intersect_uassoc($array1, $array2, "myfunction");

print_r($result);
/* Çıktı:
array(
    [a] => green
)
*/