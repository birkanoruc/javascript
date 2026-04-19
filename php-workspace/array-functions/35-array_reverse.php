<?php

/*
Tanım ve Kullanım
array_reverse() işlevi, bir diziyi ters çevirir.
array_reverse(array, preserve)
array: Girdi dizisi.
preserve: İndislerin korunup korunmayacağı. Varsayılan değeri false'dur.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

print_r(array_reverse($names));
// Çıktı: Array ( [0] => Peter [1] => Jane [2] => John [3] => Peter [4] => Jane [5] => John [6] => Peter [7] => Jane [8] => Sally [9] => John )

print_r(array_reverse($names, true));
// Çıktı: Array ( [9] => Peter [8] => Jane [7] => John [6] => Peter [5] => Jane [4] => John [3] => Peter [2] => Jane [1] => Sally [0] => John )