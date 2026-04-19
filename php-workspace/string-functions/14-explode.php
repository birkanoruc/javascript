<?php

/*
Tanım:
explode() işlevi, bir dizenin parçalanmış bir sürümünü döndürür.

Kullanım:
explode(separator, string, limit)
separator: Gerekli. Dizelerin nerede bölüneceğini belirten bir karakter.
string: Gerekli. İşlenecek dize.
limit: İsteğe bağlı. Dizelerin kaç parçaya bölüneceğini belirler. Varsayılan değer 0.
*/

$str = "Hello World!";

$exp = explode(" ", $str);

print_r($exp);
/* Çıktı:
Array
(
    [0] => Hello
    [1] => World!
)
*/
