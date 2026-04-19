<?php

/*
Tanım:
strlen() işlevi, bir dizgenin uzunluğunu (karakter sayısını) döndürür.

Kullanım:
int strlen ( string $string )

Parametreler:
- $string: Uzunluğu ölçülecek dizge. Bu parametre bir dize olmalıdır.

Dönen Değer:
- Belirtilen dizgenin karakter sayısını döndüren bir tamsayı.
*/

$text = "Hello, World!";

$length = strlen($text);
echo $length;
// Çıktı: 13