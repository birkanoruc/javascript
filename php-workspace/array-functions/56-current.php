<?php

/*
Tanım:
current() işlevi, bir dizinin içindeki göstericiyi döndürür.

Kullanım:
current(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

for ($i = 0; $i < count($colors); $i++) {
    echo current($colors) . "\n";
    next($colors);
}
/* Çıktı:
red
green
blue
*/
