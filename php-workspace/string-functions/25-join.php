<?php

/*
Tanım:
join() işlevi, bir diziyi bir dizeye dönüştürür.

Not: implode() işlevi ile aynı işlevi görür. PHP implode kullanımını önerir.

Kullanım:
join(separator, array)
separator: İsteğe bağlı. Dizi elemanları arasına yerleştirilecek ayırıcı. Varsayılan değeri "" (boş dize)dir.
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

echo join(", ", $colors);
// Çıktı: red, green, blue
