<?php

/*
Tanım:
ksort() işlevi, bir diziyi anahtarlarına göre sıralar.
Sıralama, anahtarların alfabetik sırasına göre yapılır.
Anahtarlar sayısal ise, sıralama sayısal olarak yapılır.
Anahtarlar string ise, sıralama string olarak yapılır.

Kullanım:
ksort(array, sortingtype)
array: Gerekli. Sıralanacak dizi.
sortingtype: İsteğe bağlı. Sıralama türü. İki türü vardır:
SORT_REGULAR - Varsayılan. Değerleri normal bir şekilde sıralar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
SORT_STRING - Değerleri dize olarak sıralar.
SORT_LOCALE_STRING - Dize karşılaştırma işlemi için yerel ayarları kullanır.
SORT_NATURAL - Dize karşılaştırma işlemi için "dizgesel" sıralama kullanır.
SORT_FLAG_CASE - SORT_STRING veya SORT_NATURAL ile birlikte kullanıldığında, büyük/küçük harf duyarlı sıralama yapar.
*/

$age = array("35" => "Peter", "37" => "Ben", "43" => "Joe");

ksort($age);

print_r($age);
/* Çıktı:
Array
(
    [35] => Peter
    [37] => Ben
    [43] => Joe
)
*/