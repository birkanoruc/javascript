<?php

/*
Tanım:
reset() işlevi, bir dizinin göstericisini ilk elemana taşır ve bu elemanı döndürür.

Kullanım:
reset(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

echo next($colors) . "\n";
echo next($colors) . "\n";
echo current($colors) . "\n";
echo reset($colors);
/* Çıktı:
green
blue
blue
red
*/