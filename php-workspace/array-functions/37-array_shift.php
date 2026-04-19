<?php

/*
Tanım ve Kullanım
array_shift() işlevi, bir diziden ilk elemanı çıkarır.
array_shift(array)
array: Girdi dizisi.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

array_shift($names);

print_r($names);
// Çıktı: Array ( [0] => Sally [1] => Jane [2] => Peter [3] => John [4] => Jane [5] => Peter [6] => John [7] => Jane [8] => Peter )