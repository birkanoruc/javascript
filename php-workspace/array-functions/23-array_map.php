<?php

/*
Tanım ve Kullanım
array_map() işlevi, belirtilen bir işlevi bir veya daha fazla dizi üzerinde çalıştırır ve yeni bir dizi oluşturur.
array_map(callback, array1, array2...)
callback: Diziler üzerinde çalıştırılacak işlev.
array1, array2...: İşlevin çalıştırılacağı diziler.

Dikkat! Bu işlev kullanılırken, dizilerin boyutları eşit olmalıdır.
Dikkat! Bu işlev, dizilerin anahtarlarını dikkate almaz.
*/

function myfunction($value1, $value2)
{
    return ($value1 * $value2);
}

$a = array(1, 2, 3, 4, 5);
$b = array(10, 9, 8, 7, 6);

$result = array_map("myfunction", $a, $b);

print_r($result);
/* Çıktı:
Array
(
    [0] => 10
    [1] => 18
    [2] => 24
    [3] => 28
    [4] => 30
)
*/