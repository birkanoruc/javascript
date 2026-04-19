<?php

/*
Tanım ve Kullanım
array_filter() işlevi, belirtilen bir dizi üzerinde bir geri çağırma işlevi uygular ve geri çağırma işlevi tarafından doğrulanan öğeleri içeren yeni bir dizi döndürür.
array_filter(array, callback, flag)
array: Girdi dizisi.
callback: Geri çağırma işlevi.
flag: İsteğe bağlı. Geri çağırma işlevine geçirilecek ek argümanlar:
ARRAY_FILTER_USE_KEY - Geri çağırma işlevine anahtarları geçirir.
ARRAY_FILTER_USE_BOTH - Geri çağırma işlevine hem anahtarları hem de değerleri geçirir.
*/

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$callback = function ($key) {
    return $key % 2 == 0;
};

$even_numbers_use_key = array_filter($numbers, $callback, ARRAY_FILTER_USE_KEY);

print_r($even_numbers_use_key);
/* Çıktı: 
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
    [6] => 7
    [8] => 9
)
*/

$even_numbers_use_both = array_filter($numbers,  $callback, ARRAY_FILTER_USE_BOTH);

print_r($even_numbers_use_both);
/* Çıktı: 
Array
(
    [1] => 2
    [3] => 4
    [5] => 6
    [7] => 8
    [9] => 10
)
*/