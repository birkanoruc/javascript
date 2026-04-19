<?php

/*
Tanım:
number_format() işlevi, bir sayıyı binlik gruplar halinde biçimlendirir ve isteğe bağlı olarak
ondalık basamak sayısını, ondalık nokta karakterini ve binlik ayırıcıyı belirtir.
Kullanım:
number_format(float $number, int $decimals = 0, string $decimal_point = '.', string $thousands_separator = ',')

Parametreler:
- $number: Biçimlendirilecek sayı.
- $decimals: [isteğe bağlı] Ondalık basamak sayısını ayarlar. Varsayılan değeri 0'dır.
- $decimal_point: [isteğe bağlı] Ondalık nokta ayırıcısını ayarlar. Varsayılan değer '.' dır.
- $thousands_separator: [isteğe bağlı] Binlik ayırıcısını ayarlar. Varsayılan değer ',' dir.

*/
$formatted_number = number_format(1234.5678, 2, ',', '.');

echo $formatted_number; 
// Çıktı: 1.234,57