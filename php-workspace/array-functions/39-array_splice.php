<?php

/*
Tanım ve Kullanım
array_splice() işlevi, bir dizinin belirli bir kısmını çıkarır ve başka bir diziyle değiştirir.
array_splice(array, start, length, replacement)
array: Girdi dizisi.
start: Dizinin başlangıç noktası.
length: Dizinin uzunluğu.
replacement: Dizinin çıkarılan kısmının yerine geçecek dizi.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

array_splice($names, 2, 4, array("Alice", "Bob", "Charlie", "David"));

print_r($names);
// Çıktı: Array ( [0] => John [1] => Sally [2] => Alice [3] => Bob [4] => Charlie [5] => David [6] => Jane [7] => Peter )