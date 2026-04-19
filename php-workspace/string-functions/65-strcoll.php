<?php

/*
Tanım:
strcoll() işlevi, iki dizgeyi yerel ayar (locale) bilgisine göre karşılaştırır. Bu işlev, strcmp() işlevine benzer, ancak yerel ayar bilgisine göre daha doğru sonuçlar verir.

Kullanım:
int strcoll ( string $str1 , string $str2 )

Parametreler:
- $str1: Karşılaştırılacak ilk dizge.
- $str2: Karşılaştırılacak ikinci dizge.

Dönen Değerler:
- Negatif bir değer: $str1, $str2'den önce gelir.
- Sıfır: $str1 ve $str2 eşittir.
- Pozitif bir değer: $str1, $str2'den sonra gelir.
*/

$str1 = "Hello";
$str2 = "World";

$result = strcoll($str1, $str2);

echo $result; // Çıktı: -15