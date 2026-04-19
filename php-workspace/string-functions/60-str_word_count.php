<?php

/*
Tanım:
str_word_count() işlevi, bir dizgedeki kelimeleri sayar veya bir dizgedeki kelimeleri bir dizi olarak döndürür.

Kullanım:
int str_word_count(string $string, int $format = 0, string $charlist = "")

Parametreler:
- string $string: Kelimeleri sayılacak veya döndürülecek dizge.
- int $format: (İsteğe bağlı) Döndürülecek biçimi belirtir. Varsayılan değer 0'dır.
    - 0: Kelime sayısını döndürür.
    - 1: Kelimeleri bir dizi olarak döndürür.
    - 2: Kelimeleri ve başlangıç konumlarını bir dizi olarak döndürür.
- string $charlist: (İsteğe bağlı) Kelimelere dahil edilecek ek karakterler.

Dönen Değer:
- $format parametresine bağlı olarak bir tamsayı veya dizi döner.
*/

$text = "Hello, World!";

echo "Kelime Sayısı: $wordCount" . PHP_EOL; 
// Çıktı: Kelime Sayısı: 2