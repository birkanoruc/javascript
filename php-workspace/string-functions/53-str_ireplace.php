<?php

/*
Tanım:
str_ireplace() işlevi, bir stringde belirli bir alt dizgeyi başka bir alt dizgeyle değiştirmek için kullanılır. 
Bu işlev, büyük/küçük harf duyarsızdır.

Kullanım:
string str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

Parametreler:
- $search: Değiştirilecek alt dizge veya alt dizgelerin dizisi.
- $replace: Yerine konulacak alt dizge veya alt dizgelerin dizisi.
- $subject: Arama ve değiştirme işleminin yapılacağı dizge veya dizgelerin dizisi.
- $count (isteğe bağlı): Değiştirilen alt dizge sayısını döndüren değişken.

Dönen Değer:
Değiştirilmiş dizge veya dizgelerin dizisi.
*/

$text = "Hello, World! Hello, Universe!";
$search = "Hello";
$replace = "Bonjour";
$result = str_ireplace($search, $replace, $text, $count);

echo "Değiştirilmiş dizge: $result" . PHP_EOL;
echo "Değiştirilen alt dizge sayısı: $count" . PHP_EOL;

/* Çıktı:
Değiştirilmiş dizge: Bonjour, World! Bonjour, Universe!
Değiştirilen alt dizge sayısı: 2
*/

$text = "Hello, World! Hello, Universe!";
$search = ["Hello", "Universe"];
$replace = ["Bonjour", "Monde"];
$result = str_ireplace($search, $replace, $text, $count);

echo "Değiştirilmiş dizge: $result" . PHP_EOL;
echo "Değiştirilen alt dizge sayısı: $count" . PHP_EOL;

/* Çıktı:
Değiştirilmiş dizge: Bonjour, World! Bonjour, Monde!
Değiştirilen alt dizge sayısı: 2
*/