<?php

/*
Tanım ve Kullanım
array_multisort() işlevi, birden fazla diziyi sıralamak için kullanılır.

array_multisort(array1, sorting_order, sorting_type, array2, array3...)
array1: Sıralanacak diziler.

sorting_order: Sıralama sırası. Varsayılan değeri SORT_ASC'tir. 
Dikkat! Bu parametre, sıralama sırasını belirler. 
SORT_ASC, küçükten büyüğe sıralama yapar. 
SORT_DESC, büyükten küçüğe sıralama yapar.

sorting_type: Sıralama türü. Varsayılan değeri SORT_REGULAR'dır. 
Dikkat! Bu parametre, sıralama türünü belirler.
SORT_REGULAR, normal sıralama yapar. 
SORT_NUMERIC, sayısal sıralama yapar. 
SORT_STRING, karakter dizisi sıralama yapar.
SORT_LOCALE_STRING, yerel karakter dizisi sıralama yapar.
SORT_NATURAL, doğal sıralama yapar.
SORT_FLAG_CASE, büyük/küçük harf duyarlı sıralama yapar.

array2, array3...: Sıralanacak diğer diziler.
*/

$numbers = [3, 1, 4, 2];

$names = ["Üç", "Bir", "Dört", "İki"];

array_multisort($numbers, SORT_ASC, SORT_REGULAR, $names);

print_r($numbers);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
*/

print_r($names);
/*
Array
(
    [0] => Bir
    [1] => İki
    [2] => Üç
    [3] => Dört
)
*/