<?php

/*
Tanım:
array_unique() işlevi, bir dizideki değerlerin yinelenenlerini kaldırır ve yalnızca bir kez bulunan değerleri döndürür.

Kullanım:
array_unique(array, sort_flags)
array: Girdi dizisi.
sort_flags: İsteğe bağlı. Sıralama düzeni belirler. Bu parametre, aşağıdaki değerlerden biri veya birkaçı olabilir:
SORT_REGULAR - Varsayılan. Değerlerin sıralanmasında standart bir karşılaştırma işlemi kullanılır.
SORT_NUMERIC - Değerlerin sıralanmasında sayısal bir karşılaştırma işlemi kullanılır.
SORT_STRING - Değerlerin sıralanmasında dize karşılaştırma işlemi kullanılır.
SORT_LOCALE_STRING - Dize karşılaştırma işlemi için yerel ayarları kullanır.
*/

$array = array("a" => "red", "b" => "green", "c" => "red");

$result = array_unique($array);

print_r($result);
/* Çıktı:
Array
(
    [a] => red
    [b] => green
)
*/
