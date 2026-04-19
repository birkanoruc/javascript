<?php

/*
Tanım ve Kullanım
array_replace() işlevi, bir dizinin değerlerini başka bir dizinin değerleriyle değiştirir.
array_replace(array1, array2)
array1: İlk dizi.
array2: İkinci dizi.
*/

$array1 = ["a" => "elma", "b" => "armut", "c" => "çilek"];

$array2 = ["b" => "muz", "c" => "kavun"];

$result = array_replace($array1, $array2);

print_r($result);
// Çıktı: Array ( [a] => elma [b] => muz [c] => kavun )