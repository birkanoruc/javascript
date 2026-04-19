<?php

/*
Tanım:
key() işlevi, bir dizinin içindeki göstericinin anahtarını döndürür.

Kullanım:
key(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

for ($i = 0; $i < count($colors); $i++) {
    echo key($colors) . "\n";
    next($colors);
}
/* Çıktı:
0
1
2
*/
