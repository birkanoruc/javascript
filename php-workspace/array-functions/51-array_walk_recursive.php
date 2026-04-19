<?php

/*
Tanım:
array_walk_recursive() işlevi, bir dizinin her bir elemanı için belirtilen bir işlevi çağırır.
Dikkat! Bu işlev, çok boyutlu dizilerde her bir eleman için işlem yapar ve anahtarları dikkate almaz.

Kullanım:
array_walk_recursive(array, myfunction, args)
array: Gerekli. İşlenecek dizi.
myfunction: Gerekli. Her bir eleman için çağrılacak işlev.
args: İsteğe bağlı. İşlevde kullanılacak ek argümanlar.
*/

$colors = array("red", "green");

array_walk_recursive($colors, function (&$value, $key) {
    $value = strtoupper($value);
});

print_r($colors);
/* Çıktı:
Array
(
    [0] => RED
    [1] => GREEN
)
*/