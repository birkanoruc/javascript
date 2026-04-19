<?php

/*
Tanım:
strtoupper() işlevi, bir dizgedeki tüm harfleri büyük harfe dönüştürür.

Kullanım:
string strtoupper(string $string)

Parametreler:
- $string: Büyük harfe dönüştürülecek olan dizge.

Dönen Değer:
- Büyük harfe dönüştürülmüş dizgeyi döner.
*/

$text = "Hello, World!";
$uppercaseText = strtoupper($text);
echo $uppercaseText;
// Çıktı: HELLO, WORLD!