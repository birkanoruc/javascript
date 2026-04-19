<?php

/*
Tanım:
str_repeat() işlevi, belirtilen bir dizeyi belirli bir sayıda tekrarlayarak yeni bir dize oluşturur.

Kullanım:
string str_repeat(string $input, int $multiplier)

Parametreler:
- $input: Tekrarlanacak olan dize.
- $multiplier: Dizenin kaç kez tekrarlanacağını belirten pozitif bir tamsayı.

Dönen Değer:
Tekrarlanan dizeyi içeren yeni bir dize döner.
*/

$input = "Hello, ";
$multiplier = 3;

$result = str_repeat($input, $multiplier);

echo $result; // Çıktı: "Hello, Hello, Hello, "