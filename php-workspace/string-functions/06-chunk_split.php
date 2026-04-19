<?php

/*
Tanım:
chunk_split() işlevi, bir dizenin belirli bir uzunluğa bölünmesini sağlar ve belirtilen bir karakteri ekler.

Kullanım:
chunk_split(string, length, end)
string: Gerekli. İşlenecek dize.
length: İsteğe bağlı. Dizenin bölüneceği uzunluk. Varsayılan değer 76.
end: İsteğe bağlı. Dizenin bölündüğü yerde eklenecek karakter. Varsayılan değer \r\n.
*/

$str = "Hello World!";

echo chunk_split($str, 1, "-");
// Çıktı: H-e-l-l-o- -W-o-r-l-d-!-