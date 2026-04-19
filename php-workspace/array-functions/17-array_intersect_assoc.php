<?php

/*
Tanım ve Kullanım
array_intersect_assoc() işlevi, bir veya daha fazla dizinin anahtarlarını ve değerlerini karşılaştırır ve eşleşen öğeleri döndürür.
Dikkat! Bu işlev, değerlerin yanı sıra anahtarları da karşılaştırır.
Dikkat! Bu işlev, değerleri ve anahtarları dikkate alır.

array_intersect_assoc(array1, array2, array3...)
array1: Karşılaştırılacak diziler.
array2, array3...: Karşılaştırılacak diğer diziler.
*/

$array1 = array("a" => "green", "b" => "red", "blue");

$array2 = array("a" => "green", "b" => "yellow", "red");

$array3 = array("a" => "green", "b" => "red", "blue");

$result = array_intersect_assoc($array1, $array2, $array3);

print_r($result);
// Çıktı: Array ( [a] => green )