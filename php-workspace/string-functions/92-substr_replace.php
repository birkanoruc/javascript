<?php

/*
Tanım:
substr_replace() işlevi, bir dizgenin belirtilen bir bölümünü başka bir dizge ile değiştirir.

Kullanım:
string substr_replace ( string $dizge , string $değiştirilecek , int $başlangıç [, int $uzunluk ] )

Parametreler:
- $dizge: Değişiklik yapılacak olan orijinal dizge.
- $değiştirilecek: Orijinal dizgede değiştirilmek istenen kısmın yerine geçecek olan dizge.
- $başlangıç: Değiştirmenin başlayacağı pozisyon. Pozitif bir değer başlangıçtan itibaren, negatif bir değer sondan itibaren sayılır.
- $uzunluk (isteğe bağlı): Değiştirilecek kısmın uzunluğu. Pozitif bir değer başlangıçtan itibaren, negatif bir değer sondan itibaren sayılır. Bu parametre belirtilmezse, başlangıç pozisyonundan dizgenin sonuna kadar olan kısım değiştirilir.

Dönen Değer:
Değişiklik yapılmış olan yeni dizge.
*/

$dizge = "Hello, World!";
$değiştirilecek = "Hi";
$başlangıç = 5;

echo substr_replace($dizge, $değiştirilecek, $başlangıç);
// Çıktı: HelloHi
