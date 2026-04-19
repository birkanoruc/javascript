<?php

/*
Tanım:
array_unshift() işlevi, bir veya daha fazla değeri bir dizinin başına ekler.
Dikkat! Bu işlev, dizinin başına eklenen değerlerin anahtarlarını 0'dan başlayarak yeniden düzenler, sıralar.

Kullanım:
array_unshift(array, value1, value2, ...)
array: Gerekli. Bir dizi.
value1: Gerekli. Dizinin başına eklenecek olan değer.
value2, ...: İsteğe bağlı. Dizinin başına eklenecek olan diğer değerler.
*/

$colors = array("red", "green");

array_unshift($colors, "blue", "yellow");

print_r($colors);
/* Çıktı:
Array
(
    [0] => blue
    [1] => yellow
    [2] => red
    [3] => green
)
*/