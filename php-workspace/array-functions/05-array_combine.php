<?php

/*
Tanım:
array_combine() işlevi, bir dizi anahtarlarını ve bir dizi değerlerini birleştirir ve yeni bir dizi oluşturur.

Kullanım:
array_combine(keys, values)
keys: Anahtarlar dizisi.
values: Değerler dizisi.
*/

$first_names = array("John", "Sally", "Jane", "Peter");
$last_names = array("Doe", "Smith", "Jones", "Doe");

$name = array_combine($first_names, $last_names);
print_r($name);
/* Çıktı: 
Array
(
    [John] => Doe
    [Sally] => Smith
    [Jane] => Jones
    [Peter] => Doe
)
*/