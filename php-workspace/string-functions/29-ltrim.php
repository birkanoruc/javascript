<?php

/*
Tanım:
ltrim() işlevi, bir dizinin başındaki boşlukları kaldırır.

Kullanım:
ltrim(string, karakterler)
string: Gerekli. İşlenecek dize.
karakterler: İsteğe bağlı. Kaldırılacak karakterler. Varsayılan değeri " " (boşluk)dir.
Eğer $characters parametresi belirtilmezse, varsayılan olarak şu karakterleri kaldırır:
Boşluk (” “)
Yeni satır (”\n”)
Satır başı (”\r”)
Sekme (”\t”)
Dikey sekme (”\v”)
Null karakter (”\x00”)
*/

$str = "   Hello World!";

echo ltrim($str);
// Çıktı: Hello World!

echo "\n";

$text = "###Hello World!";
$result = ltrim($text, "#");

echo $result;
// Çıktı: Hello World!