<?php

/*
Tanım:
trim() işlevi, bir dizgenin başındaki ve sonundaki boşlukları (veya diğer önceden tanımlanmış karakterleri) kaldırır.

Kullanım:
string trim(string $str, string $character_mask = " \t\n\r\0\x0B")

Parametreler:
- $str: (string) Gerekli. Boşlukların veya diğer karakterlerin kaldırılacağı dizge.
- $character_mask: (string) İsteğe bağlı. Kaldırılacak karakterleri belirten bir dize. Varsayılan olarak boşluk, tab, yeni satır, satır başı, null ve dikey sekme karakterlerini içerir.

Dönen Değer:
- (string) Kırpılmış dizge.
*/

$str = "   Hello, World!\t    ";
echo trim($str);
// Çıktı: Hello, World!