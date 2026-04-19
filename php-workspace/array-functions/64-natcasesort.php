<?php

/*
Tanım:
natcasesort() işlevi, bir diziyi anahtarlarına göre sıralar ve büyük/küçük harf duyarlı olmayan bir sıralama yapar.
Sıralama, anahtarların alfabetik sırasına göre yapılır.
Anahtarlar sayısal ise, sıralama sayısal olarak yapılır.
Anahtarlar string ise, sıralama string olarak yapılır.

Kullanım:
natcasesort(array)
array: Gerekli. Sıralanacak dizi.
*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

natcasesort($age);

print_r($age);
/* Çıktı:
Array
(
    [37] => Ben
    [43] => Joe
    [35] => Peter
)
*/