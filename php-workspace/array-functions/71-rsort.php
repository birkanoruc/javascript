<?php

/*
Tanım:
rsort() işlevi, bir diziyi değerlerine göre büyükten küçüğe sıralar.
Sıralama, değerlerin büyüklüklerine göre yapılır.
Değerler sayısal ise, sıralama sayısal olarak yapılır.
Değerler string ise, sıralama string olarak yapılır.

Kullanım:
rsort(array, sortingtype)
array: Gerekli. Sıralanacak dizi.
sortingtype: İsteğe bağlı. Sıralama türü. Altı türü vardır:
SORT_REGULAR - Varsayılan. Değerleri normal bir şekilde sıralar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
SORT_STRING - Değerleri dize olarak sıralar.
SORT_LOCALE_STRING - Dize karşılaştırma işlemi için yerel ayarları kullanır.
SORT_NATURAL - Dize karşılaştırma işlemi için "dizgesel" sıralama kullanır.
SORT_FLAG_CASE - SORT_STRING veya SORT_NATURAL ile birlikte kullanıldığında, büyük/küçük harf duyarlı sıralama yapar.
*/

$numbers = array(4, 6, 2, 22, 11);

rsort($numbers);

print_r($numbers);
/* Çıktı:
Array
(
    [0] => 22
    [1] => 11
    [2] => 6
    [3] => 4
    [4] => 2
)
*/