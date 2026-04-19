<?php

/*
Tanım:
md5() işlevi, bir dizenin MD5 özetini hesaplar.
MD5, 128 bitlik bir şifreleme algoritmasıdır.

Kullanım:
md5(string, raw)
string: Gerekli. İşlenecek dize.
raw: İsteğe bağlı. true olarak ayarlanırsa, MD5 özeti 16 bayt olarak döndürülür. Varsayılan değeri false'tur.
*/

$str = "Hello World!";
echo md5($str);
// Çıktı: 6cd3556deb0da54bca060b4c39479839
