<?php

/*
Tanım:
stripslashes() işlevi, bir dizgedeki ters eğik çizgi (\) karakterlerini kaldırır. 
Genellikle, veritabanından veya kullanıcı girişinden gelen verilerdeki kaçış karakterlerini temizlemek için kullanılır.

stripclashes() ile sadece PHP etiketlerini kaldırabilirsiniz, ancak bazı HTML etiketlerini kaldırmak için strip_tags() kullanabilirsiniz

Not: Sadece ters eğik çizgi (\) ile kaçış almış karakterleri kaldırır.
Dikkat: stripcslashes() işlevi C tarzı kaçış dizilerini (\n, \r, \t, \v, \e, \f, \0, \\, vb.) gerçek karakterlere dönüştürür.

Kullanım:
string stripslashes ( string $dizge )

Parametreler:
- $dizge: Ters eğik çizgi karakterlerinin kaldırılacağı giriş dizgesi.

Dönen Değerler:
- Ters eğik çizgi karakterleri kaldırılmış olan dizgeyi döner.
*/

$dizge = "Hello, \World!";
$result = stripslashes($dizge);

echo $result; // Çıktı: Hello, World!