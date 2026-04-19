<?php

/*
Tanım:
krsort() işlevi, bir diziyi anahtarlarına göre ters sıralar.
Anahtarlar, büyükten küçüğe doğru sıralanır.
Bu işlev, anahtarları korur ve değerlerin sıralanmasını etkilemez.

Kullanım:
krsort(array, sortingtype)
array: Gerekli. Sıralanacak dizi.
sortingtype: İsteğe bağlı. Sıralama türü. İki türü vardır:
SORT_REGULAR - Varsayılan. Değerleri normal bir şekilde sıralar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
SORT_STRING - Değerleri dize olarak sıralar.
SORT_LOCALE_STRING - Dize karşılaştırma işlemi için yerel ayarları kullanır.
SORT_NATURAL - Değerleri "dizgesel" olarak sıralar.
SORT_FLAG_CASE - SORT_STRING veya SORT_NATURAL ile birlikte kullanıldığında, büyük/küçük harf duyarlı sıralama yapar.
*/

$age = array("35" => "Peter", "37" => "Ben", "43" => "Joe");

krsort($age);

print_r($age);
/* Çıktı:
Array
(
    [43] => Joe
    [37] => Ben
    [35] => Peter
)
*/