<?php

/*

Tanım ve Kullanım
array_fill_keys() işlevi, belirtilen anahtarlarla belirtilen bir değeri içeren bir dizi oluşturur.
array_fill_keys(keys, value)
keys: Anahtarlar dizisi.
value: Diziye atanacak değer.
*/

$keys = array("a", "b", "c", "d", "e");
$value = "red";

$colors = array_fill_keys($keys, $value);
print_r($colors);
// Çıktı: Array ( [a] => red [b] => red [c] => red [d] => red [e] => red )