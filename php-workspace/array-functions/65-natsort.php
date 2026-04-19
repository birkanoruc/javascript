<?php

/*
Tanım:
natsort() işlevi, bir diziyi doğal sıralama algoritmasına göre sıralar.
Sıralama, anahtarların alfabetik sırasına göre yapılır.
Anahtarlar sayısal ise, sıralama sayısal olarak yapılır.
Anahtarlar string ise, sıralama string olarak yapılır.

Kullanım:
natsort(array)
array: Gerekli. Sıralanacak dizi.
*/

$temp_files = array(
    "temp15.txt",
    "temp10.txt",
    "temp1.txt",
    "temp22.txt",
    "temp2.txt"
);

sort($temp_files);
echo "Standard sorting: ";
print_r($temp_files);
/*
Standard sorting: Array
(
    [0] => temp1.txt
    [1] => temp10.txt
    [2] => temp15.txt
    [3] => temp2.txt
    [4] => temp22.txt
)
*/


echo "\n";

natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);
/*
Natural order: Array
(
    [0] => temp1.txt
    [3] => temp2.txt
    [1] => temp10.txt
    [2] => temp15.txt
    [4] => temp22.txt
)
*/