<?php

/*
Tanım:
shuffle() işlevi, bir dizinin elemanlarını karıştırır.
Dizinin anahtarları değişmez, sadece değerler karıştırılır.

Kullanım:
shuffle(array)
array: Gerekli. Karıştırılacak dizi.
*/

$colors = array("red", "green", "blue");

shuffle($colors);

print_r($colors);
/* Çıktı:
Array
(
    [0] => blue
    [1] => red
    [2] => green
)
*/