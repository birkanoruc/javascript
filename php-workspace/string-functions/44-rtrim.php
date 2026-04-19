<?php

/*
Tanım:
rtrim() işlevi, bir dizgenin sonundaki boşlukları veya diğer karakterleri kaldırır.

Kullanım:
string rtrim(string $string, string $characters = " \n\r\t\v\0")

Parametreler:
- $string: (string) Gerekli. Sonundaki karakterlerin kaldırılacağı dizge.
- $characters: (string) İsteğe bağlı. Kaldırılacak karakterlerin listesi. Varsayılan olarak boşluk, yeni satır, satır başı, sekme, dikey sekme ve null karakterlerini kaldırır.

*/

$str = "Hello World!    ";

echo rtrim($str);
// Çıktı: Hello World!