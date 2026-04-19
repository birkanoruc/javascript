<?php

/*
Tanım:
array_count_values() işlevi, bir dizideki değerlerin sayısını döndürür.

Kullanım:
array_count_values(array)
array: Girdi dizisi.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");
print_r(array_count_values($names));
/* Çıktı:
Array
(
    [John] => 3
    [Sally] => 1
    [Jane] => 3
    [Peter] => 3
)
*/