<?php

/*
Tanım ve Kullanım
array_replace_recursive() işlevi, bir dizinin değerlerini başka bir dizinin değerleriyle değiştirir. 
Dikkat! Bu işlev, array_replace() işlevinden farklı olarak, bir dizi içindeki dizileri de değiştirir.
array_replace_recursive(array1, array2)
array1: İlk dizi.
array2: İkinci dizi.
*/

$array1 = [
    "meyveler" => ["kırmızı" => "çilek", "sarı" => "muz"],
    "sebzeler" => "havuç"
];

$array2 = [
    "meyveler" => ["kırmızı" => "elma"],
    "sebzeler" => "ıspanak"
];

$result = array_replace_recursive($array1, $array2);

print_r($result);
// Çıktı: Array ( [meyveler] => Array ( [kırmızı] => elma [sarı] => muz ) [sebzeler] => ıspanak )