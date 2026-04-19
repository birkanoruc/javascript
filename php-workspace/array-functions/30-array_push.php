<?php

/*
Tanım ve Kullanım
array_push() işlevi, bir veya daha fazla elemanı bir dizinin sonuna ekler.
array_push(array, value1, value2, value3...)
array: Girdi dizisi.
value1, value2, value3...: Eklenecek değerler.
*/

$names = array("John", "Sally", "Jane", "Peter");

array_push($names, "Doe", "Smith", "Jones");

print_r($names);
// Çıktı: Array ( [0] => John [1] => Sally [2] => Jane [3] => Peter [4] => Doe [5] => Smith [6] => Jones )