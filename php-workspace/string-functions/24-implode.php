<?php

/*
Tanım:
implode() işlevi, bir diziyi bir dizeye dönüştürür.

Kullanım:
implode(separator, array)
separator: İsteğe bağlı. Dizi elemanları arasına yerleştirilecek ayırıcı. Varsayılan değeri "" (boş dize)dir.
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

echo implode(", ", $colors);
// Çıktı: red, green, blue
