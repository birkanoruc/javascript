<?php

/*
Tanım:
asort() işlevi, bir diziyi değerlerine göre küçükten büyüğe sıralar ve anahtarları korur.

Kullanım:
asort(array, sortingtype)
array: Gerekli. Sıralanacak dizi.
sortingtype: İsteğe bağlı. Sıralama türü. İki türü vardır:
SORT_REGULAR - Varsayılan. Değerleri normal bir şekilde sıralar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
*/

$array = array("a" => "red", "b" => "green", "c" => "blue");

asort($array);

print_r($array);
/* Çıktı:
Array
(
    [c] => blue
    [b] => green
    [a] => red
)
*/