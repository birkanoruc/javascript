<?php

/*
Tanım:
array_change_key_case() işlevi, bir dizinin anahtarlarının büyük harfli, küçük harfli veya her kelimenin ilk harfini büyük yapar.

Kullanım:
array_change_key_case(array, case)
array: Girdi dizisi.
case: İstenen durum. İki değer alabilir:
CASE_LOWER - Anahtarları küçük harf yapar, default olarak bu değer kullanılır.
CASE_UPPER - Anahtarları büyük harf yapar.
*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

print_r(array_change_key_case($age, CASE_LOWER));
/* Çıktı: 
Array
(
    [peter] => 35
    [ben] => 37
    [joe] => 43
)
*/

print_r(array_change_key_case($age, CASE_UPPER));
/* Çıktı: 
Array
(
    [PETER] => 35
    [BEN] => 37
    [JOE] => 43
)
*/