<?php

/*
Tanım:
next() işlevi, bir dizinin göstericisini bir sonraki elemana taşır ve bu elemanı döndürür.

Kullanım:
next(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

echo next($colors);
/* Çıktı:
green
*/
