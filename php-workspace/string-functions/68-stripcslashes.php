<?php

/*
Tanım:
stripcslashes() işlevi, bir dizedeki ters eğik çizgi (\) ile kaçış yapılmış karakterlerin tersini alır. 
Bu işlev, bir dizedeki kaçış karakterlerini orijinal hallerine döndürmek için kullanılır.

Kullanım:
string stripcslashes ( string $str )

Parametreler:
- $str: Kaçış karakterlerini kaldırmak istediğiniz giriş dizesi.

Dönen Değerler:
- Kaçış karakterleri kaldırılmış olan dizeyi döndürür.
*/

$str = "Hello, \t\nWorld!";
$result = stripcslashes($str);

echo $result; // Çıktı: Hello, World!