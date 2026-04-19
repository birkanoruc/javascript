<?php

/*
Tanım:
crc32() işlevi, bir dizenin CRC32 karma değerini hesaplar.
CRC32, bir dizenin benzersiz bir karma değerini hesaplamak için kullanılır.

Kullanım:
crc32(string)
string: Gerekli. İşlenecek dize.
*/

$str = "Hello World!";

echo crc32($str);
// Çıktı: 472456355