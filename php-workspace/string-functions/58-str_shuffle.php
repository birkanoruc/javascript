<?php

/*
Tanım:
str_shuffle() işlevi, bir dizgeyi rastgele karıştırarak yeni bir dizge döndürür.

Kullanım:
string str_shuffle ( string $string )

Parametreler:
- $string: Karıştırılacak olan dizge.

Dönen Değerler:
- Karıştırılmış dizgeyi döndürür.
*/

$text = "Hello, World!";

$shuffledText = str_shuffle($text);

echo $shuffledText; // Çıktı(Her seferinde farklı olabilir!): olleH ,dlroW!