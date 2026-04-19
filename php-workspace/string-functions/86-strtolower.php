<?php

/*
Tanım:
strtolower() işlevi, bir dizgedeki tüm harfleri küçük harfe dönüştürür.

Kullanım:
string strtolower(string $string)

Parametreler:
- $string: Küçük harfe dönüştürülecek dizge.

Dönen Değer:
- Küçük harfe dönüştürülmüş dizgeyi döner.
*/

$text = "Hello, World!";
$lowercaseText = strtolower($text);
echo $lowercaseText; 
// Çıktı: hello, world!
