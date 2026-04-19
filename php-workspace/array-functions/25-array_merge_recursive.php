<?php

/*
Tanım ve Kullanım
array_merge_recursive() işlevi, iki veya daha fazla diziyi birleştirir. 
Bu işlev, array_merge() işlevinden farklı olarak, aynı anahtara sahip dizileri birleştirirken, yeni bir dizi içerisinde bu anahtara sahip dizileri birleştirir.
array_merge_recursive(array1, array2, array3...)
array1: Birleştirilecek diziler.
array2, array3...: Birleştirilecek diğer diziler.
*/

$array1 = array("a" => "green", "red", "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$array3 = array("a" => "green", "yellow", "blue");

$result = array_merge_recursive($array1, $array2, $array3);

print_r($result);
// Çıktı: Array ( [a] => green [0] => red [1] => blue [2] => red [b] => green [3] => yellow [4] => red [c] => green [5] => yellow [6] => blue )