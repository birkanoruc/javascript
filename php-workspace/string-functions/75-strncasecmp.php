<?php

/*
Tanım:
strncasecmp() işlevi, iki dizgenin belirli bir uzunluğa kadar büyük/küçük harf duyarsız olarak karşılaştırılmasını sağlar.

Kullanım:
int strncasecmp ( string $dizge1 , string $dizge2 , int $uzunluk )

Parametreler:
- $dizge1: Karşılaştırılacak ilk dizge.
- $dizge2: Karşılaştırılacak ikinci dizge.
- $uzunluk: Karşılaştırılacak karakter sayısı.

Dönen Değer:
- Eğer dizge1 dizge2'den küçükse negatif bir değer döner.
- Eğer dizge1 dizge2'den büyükse pozitif bir değer döner.
- Eğer dizge1 ve dizge2 eşitse 0 döner.
*/

$dizge1 = "Hello";
$dizge2 = "hello";
$uzunluk = 5;

$result = strncasecmp($dizge1, $dizge2, $uzunluk);

echo $result; // Çıktı: 0