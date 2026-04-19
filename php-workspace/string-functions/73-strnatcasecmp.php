<?php

/*
Tanım:
strnatcasecmp() işlevi, iki dizgeyi doğal sıralama algoritması kullanarak karşılaştırır ve büyük/küçük harf duyarsız bir karşılaştırma yapar.

Kullanım:
int strnatcasecmp ( string $dizge1 , string $dizge2 )

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

$result = strnatcasecmp($dizge1, $dizge2);

echo $result; // Çıktı: 0