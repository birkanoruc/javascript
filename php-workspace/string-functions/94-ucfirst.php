<?php

/*
Tanım:
Bir dizgenin ilk harfini büyük yapar.

Kullanım:
string ucfirst(string $str)

Parametreler:
- $str: İlk harfi büyük yapılacak olan dizge.

Dönen Değer:
- İlk harfi büyük yapılmış olan dizge.
*/

$text = "hello, world!";
$uppercaseFirstLetter = ucfirst($text);
echo $uppercaseFirstLetter;
// Çıktı: Hello, world!