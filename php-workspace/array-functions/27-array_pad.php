<?php

/*
Tanım ve Kullanım
array_pad() işlevi, bir diziyi belirli bir boyuta genişletir veya kısaltır.
array_pad(array, size, value)
array: Girdi dizisi.
size: Yeni boyut.
value: Eğer dizi genişletiliyorsa, bu değer dizinin sonuna eklenir. Eğer dizi kısaltılıyorsa, bu değer dizinin sonundan silinir.
*/

$names = array("John", "Sally", "Jane", "Peter");

print_r(array_pad($names, 6, "Doe"));
// Çıktı: Array ( [0] => John [1] => Sally [2] => Jane [3] => Peter [4] => Doe [5] => Doe )