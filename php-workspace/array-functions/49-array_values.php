<?php

/*
Tanım:
array_values() işlevi, bir dizinin değerlerini alır ve yeni bir dizi oluşturur.
Dikkat! Bu işlev, dizinin anahtarlarını dikkate almaz.
Dikkat! Bu işlev, dizinin anahtarlarını sıralı bir şekilde 0'dan başlayarak sıralar.

Kullanım:
array_values(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red" => "apple", "green" => "lime", "blue" => "blueberry");

$result = array_values($colors);

print_r($result);
/* Çıktı:
Array
(
    [0] => apple
    [1] => lime
    [2] => blueberry
)
*/