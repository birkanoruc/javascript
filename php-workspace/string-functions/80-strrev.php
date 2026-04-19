<?php

/*
Tanım:
strrev() işlevi, bir dizgeyi tersine çevirir ve ters çevrilmiş dizgeyi döndürür.

Kullanım:
string strrev(string $string)

Parametreler:
- $string: Tersine çevrilecek olan dizge.

Dönen Değerler:
- Tersine çevrilmiş dizgeyi döndürür.
*/

$text = "Hello, World!";

$reversedText = strrev($text);

echo $reversedText; // Çıktı: !dlroW ,olleH