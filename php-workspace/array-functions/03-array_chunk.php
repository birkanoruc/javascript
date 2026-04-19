<?php

/*
Tanım:
array_chunk() işlevi, bir diziyi belirtilen boyutlarda parçalara böler ve her bir parçayı yeni bir diziye koyar.

Kullanım:
array_chunk(array, size, preserve_keys)
array: Girdi dizisi.
size: Her bir parçanın boyutu.
preserve_keys: İkinci parametre olarak belirtilen boyutun her bir parçasının anahtarlarını korumak için true, aksi takdirde false.
false: Anahtarlar korunmaz, default olarak bu değer kullanılır.
true: Anahtarlar korunur.
*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "John" => "40", "Doe" => "45", "Smith" => "50");

print_r(array_chunk($age, 2, false));
/* Çıktı: 
Array
(
    [0] => Array
        (
            [0] => 35
            [1] => 37
        )

    [1] => Array
        (
            [0] => 43
            [1] => 40
        )

    [2] => Array
        (
            [0] => 45
            [1] => 50
        )

)
*/

print_r(array_chunk($age, 2, true));
/* Çıktı: 
Array
(
    [0] => Array
        (
            [Peter] => 35
            [Ben] => 37
        )

    [1] => Array
        (
            [Joe] => 43
            [John] => 40
        )

    [2] => Array
        (
            [Doe] => 45
            [Smith] => 50
        )

)
*/