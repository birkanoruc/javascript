<?php

/*
Tanım ve Kullanım
array_keys() işlevi, bir dizideki tüm anahtarları içeren bir dizi döndürür.
array_keys(array, search_value, strict)
array: Girdi dizisi.
search_value: Aranacak değer.
strict: true ise, arama sırasında hem anahtarın hem de değerin türüne bakılır.

Dikkat! Eğer search_value belirtilirse, sadece bu değere sahip anahtarlar döndürülür.
*/

$colors = array("first" => 1, "second" => 2, "third" => 3);

print_r(array_keys($colors));
/* Çıktı:
Array
(
    [0] => first
    [1] => second
    [2] => third
)
*/

print_r(array_keys($colors, "1"));
/* Çıktı:
(
    [0] => first
)
*/

print_r(array_keys($colors, "1", true));
// Çıktı: Array ( )

print_r(array_keys($colors, "1", false));
/* Çıktı:
Array
(
    [0] => first
)
*/

print_r(array_keys($colors, "4"));
// Çıktı: Array ( )
