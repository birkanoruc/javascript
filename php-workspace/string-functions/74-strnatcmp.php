<?php

/*
Tanım:
strnatcmp() işlevi, iki dizgeyi doğal sıralama algoritması kullanarak karşılaştırır. 
Bu, insan tarafından okunabilir sıralama anlamına gelir, yani sayılar sayısal olarak karşılaştırılır ve dizgeler alfabetik olarak karşılaştırılır.

Kullanım:
int strnatcmp ( string $dizge1 , string $dizge2 )

Parametreler:
- $dizge1: Karşılaştırılacak ilk dizge.
- $dizge2: Karşılaştırılacak ikinci dizge.

Dönen Değer:
- Eğer $dizge1 < $dizge2 ise negatif bir değer döner.
- Eğer $dizge1 > $dizge2 ise pozitif bir değer döner.
- Eğer $dizge1 == $dizge2 ise 0 döner.
*/

$dizge1 = "10";
$dizge2 = "20";

$result = strnatcmp($dizge1, $dizge2);

echo $result; // Çıktı: -1