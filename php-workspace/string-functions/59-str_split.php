<?php

/*
Tanım:
str_split() işlevi, bir dizgeyi belirli bir uzunlukta parçalara ayırarak bir diziye dönüştürür.

Kullanım:
array str_split(string $string, int $length = 1)

Parametreler:
- string $string: Parçalara ayrılacak olan dizge.
- int $length: Her bir parçanın uzunluğu. Varsayılan değer 1'dir.

Dönen Değer:
- Parçalara ayrılmış dizge parçalarını içeren bir dizi döner.
*/

$text = "Hello, World!";
$splittedText = str_split($text, 5);

print_r($splittedText);
/* Çıktı: 
Array
(
    [0] => Hello
    [1] => , Wor
    [2] => ld!
)
*/