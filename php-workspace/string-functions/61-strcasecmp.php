<?php

/*
Tanım:
strcasecmp() işlevi, iki dizgeyi büyük/küçük harf duyarsız olarak karşılaştırır.

Kullanım:
int strcasecmp ( string $dizge1 , string $dizge2 )

Parametreler:
- $dizge1: Karşılaştırılacak ilk dizge.
- $dizge2: Karşılaştırılacak ikinci dizge.

Dönen Değer:
- Eğer $dizge1 < $dizge2 ise negatif bir değer döner.
- Eğer $dizge1 > $dizge2 ise pozitif bir değer döner.
- Eğer $dizge1 == $dizge2 ise 0 döner.
*/

$dizge1 = "Hello";
$dizge2 = "hello";

$result = strcasecmp($dizge1, $dizge2);

echo $result; // Çıktı: 0