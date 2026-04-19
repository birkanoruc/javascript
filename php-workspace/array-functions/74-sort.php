<?php

/*
Tanım:
sort() işlevi, bir diziyi sıralar. 
Bu işlev, dizinin anahtarlarını değiştirmez. Eğer anahtarları da sıralamak istiyorsanız ksort() işlevini kullanmalısınız.

Kullanım:
sort(array, sorting_type)
array: Gerekli. İşlenecek dizi.
sorting_type: Opsiyonel. Sıralama türü. Bu parametre aşağıdaki değerlerden birini alabilir:
SORT_REGULAR - Varsayılan. Değerlerin türüne göre sıralama yapar.
SORT_NUMERIC - Değerleri sayısal olarak sıralar.
SORT_STRING - Değerleri dize olarak sıralar.
SORT_LOCALE_STRING - Dize karşılaştırma işlemi için yerel ayarları kullanır.
SORT_NATURAL - Dize karşılaştırma işlemi için "dizgesel" sıralama kullanır.
SORT_FLAG_CASE - SORT_STRING veya SORT_NATURAL ile birlikte kullanıldığında, büyük/küçük harf duyarlı sıralama yapar.
*/

$numbers = array(4, 6, 2, 22, 11);

sort($numbers);

print_r($numbers);
/* Çıktı:
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 11
    [4] => 22
)
*/