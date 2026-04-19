<?php

/*
Tanım ve Kullanım
array_key_exists() işlevi, belirtilen anahtarın dizide var olup olmadığını kontrol eder.
array_key_exists(key, array)
key: Kontrol edilecek anahtar.
array: Girdi dizisi.
*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

if (array_key_exists("Peter", $age)) {
    echo "Peter is " . $age["Peter"] . " years old.";
} else {
    echo "Peter is not in the array.";
}

// Çıktı: Peter is 35 years old.