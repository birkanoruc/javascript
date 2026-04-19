<?php

/*
Tanım:
strncmp() işlevi, iki dizgenin belirli bir uzunluğa kadar olan kısmını karşılaştırır. 
Bu işlev, karşılaştırılan dizgelerin ilk n karakterine bakar ve bu karakterlerin ASCII değerlerine göre karşılaştırma yapar.

Kullanım:
int strncmp ( string $str1 , string $str2 , int $len )

Parametreler:
- $str1: Karşılaştırılacak ilk dizge.
- $str2: Karşılaştırılacak ikinci dizge.
- $len: Karşılaştırılacak karakter sayısı.

Dönen Değer:
- strncmp() işlevi, $str1 ve $str2 dizgelerinin ilk $len karakteri arasında bir fark bulursa, bu farkın ASCII değerini döndürür. Eğer fark yoksa 0 döner.
*/

$result = strncmp("Hello world!", "Hello earth!", 6);

echo $result; // Çıktı: 0