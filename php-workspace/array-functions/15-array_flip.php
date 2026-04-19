<?php

/*
Tanım ve Kullanım
array_flip() işlevi, bir dizinin anahtarlarını değerlerine ve değerlerini anahtarlarına dönüştürür.

array_flip(array)
array: Girdi dizisi.
*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
print_r(array_flip($age));
// Çıktı: Array ( [35] => Peter [37] => Ben [43] => Joe )