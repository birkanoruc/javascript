<?php

/*
Tanım ve Kullanım
array_slice() işlevi, bir dizinin belirli bir kısmını döndürür.
array_slice(array, start, length, preserve_keys)
array: Girdi dizisi.
start: Dizinin başlangıç noktası.
length: Dizinin uzunluğu.
preserve_keys: İndekslerin korunup korunmayacağı. Var sayılan değeri false'dur.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

print_r(array_slice($names, 2, 4));
// Çıktı: Array ( [0] => Jane [1] => Peter [2] => John [3] => Jane )

print_r(array_slice($names, 2, 4, true));
// Çıktı: Array ( [2] => Jane [3] => Peter [4] => John [5] => Jane )