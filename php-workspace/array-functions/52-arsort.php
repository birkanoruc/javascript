<?php

/*
Tanım:
arsort() işlevi, bir diziyi değerlerine göre büyükten küçüğe sıralar ve anahtarları korur.

Kullanım:
arsort(array, sortingtype)
array: Gerekli. Sıralanacak dizi.
sortingtype: İsteğe bağlı. Sıralama türü. İki türü vardır:
SORT_REGULAR - Varsayılan. Değerleri normal bir şekilde sıralar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
*/

$array = array("a" => "red", "b" => "green", "c" => "blue");

arsort($array);

print_r($array);
/* Çıktı:
Array
(
    [b] => green
    [c] => blue
    [a] => red
)
*/