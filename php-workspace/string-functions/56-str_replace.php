<?php

/*
Tanım:
str_replace() işlevi, bir dizgede belirli karakterlerin veya karakter dizilerinin yerine başka karakterler veya karakter dizileri koymak için kullanılır.
Bu işlev, büyük/küçük harf duyarlıdır.
Dikkat! str_ireplace() işlevini kullanarak büyük/küçük harf duyarsız değişiklik yapabilirsiniz.

Kullanım:
str_replace(find,replace,string,count)

Parametreler:
- $find: Değiştirilecek karakter veya karakter dizisi. Dizi olarak da verilebilir.
- $replace: Yerine konulacak karakter veya karakter dizisi. Dizi olarak da verilebilir.
- $string: Değişiklik yapılacak dizge veya dizgeler. Dizi olarak da verilebilir.
- $count (isteğe bağlı): Değiştirilen öğelerin sayısını döndüren değişken.
*/

$text = "Hello, World! Hello, Universe!";
$find = "Hello";
$replace = "Goodbye";

$result = str_replace($find, $replace, $text);

echo $result; // Çıktı: Goodbye, World! Goodbye, Universe!