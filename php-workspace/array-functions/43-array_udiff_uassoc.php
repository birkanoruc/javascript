<?php

/*
Tanım ve Kullanım
array_udiff_uassoc() işlevi, iki veya daha fazla diziyi karşılaştırır ve birinci dizide olup diğer dizilerde olmayan değerleri döndürür.
Dikkat! Bu işlev, bir geri çağırma işlevi kullanarak karşılaştırma yapar.
Dikkat! Bu işlev, değerlerin yanı sıra anahtarları da karşılaştırır.

array_udiff_uassoc(array1, array2, array3, ..., myfunction_key, myfunction_value)

array1: Karşılaştırılacak ana dizi.
array2: Karşılaştırılacak dizilerden biri.
array3, ...: İsteğe bağlı: Karşılaştırılacak dizilerden bir başkası.
myfunction_key: Karşılaştırma işlemi sırasında kullanılacak anahtar geri çağırma işlevi.
myfunction_value: Karşılaştırma işlemi sırasında kullanılacak değer geri çağırma işlevi.
*/

function myfunction_key($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function myfunction_value($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "red", "b" => "green", "c" => "blue");

$array2 = array("a" => "red", "c" => "black", "d" => "blue");

/**
 * a => "red" (Her iki dizide de var, aynı) → ÇIKARILIR.
 * b => "green" (Sadece $array1 içinde var) → SONUÇTA KALIR.
 * c => "blue" (Anahtar c her iki dizide var, AMA değerleri farklı "blue" ≠ "black") → SONUÇTA KALIR.
 * d => "blue" (Sadece $array2 içinde var) → ÇIKARILIR.
 */
$result = array_udiff_uassoc($array1, $array2, "myfunction_key", "myfunction_value");

print_r($result);
/* Çıktı:
Array
(
    [b] => green
    [c] => blue
)
*/