<?php

/*
Tanım ve Kullanım
array_pop() işlevi, bir diziden son elemanı çıkarır.
array_pop(array)
array: Girdi dizisi.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

array_pop($names);

print_r($names);
// Çıktı: Array ( [0] => John [1] => Sally [2] => Jane [3] => Peter [4] => John [5] => Jane [6] => Peter [7] => John [8] => Jane )