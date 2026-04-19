<?php

/*
Tanım:
substr_compare() işlevi, iki dizgenin belirli bir bölümünü karşılaştırır. 
Karşılaştırma, belirtilen başlangıç konumundan itibaren yapılır ve isteğe bağlı olarak belirtilen uzunluk kadar karakter karşılaştırılır.

Kullanım:
int substr_compare ( string $main_str , string $str , int $offset , int $length = null , bool $case_insensitivity = false )

Parametreler:
- $main_str: Karşılaştırılacak ana dizge.
- $str: Karşılaştırılacak ikinci dizge.
- $offset: Karşılaştırmanın başlayacağı konum.
- $length: (İsteğe bağlı) Karşılaştırılacak karakter sayısı. Belirtilmezse, dizgenin geri kalanı karşılaştırılır.
- $case_insensitivity: (İsteğe bağlı) Karşılaştırmanın büyük/küçük harf duyarsız olup olmayacağını belirten boolean. Varsayılan olarak false (büyük/küçük harf duyarlı).

Dönen Değer:
- Eğer $main_str ve $str eşitse 0 döner.
- Eğer $main_str, $str'den küçükse negatif bir değer döner.
- Eğer $main_str, $str'den büyükse pozitif bir değer döner.
*/

$main_str = "Hello";
$str = "Hello";
$offset = 0;

echo substr_compare($main_str, $str, $offset);
// Çıktı: 0