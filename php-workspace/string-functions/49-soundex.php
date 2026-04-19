<?php

/*
Tanım:
soundex — Bir dizgenin soundex anahtarını hesaplar
Bir soundex anahtarı, bir kelimenin İngilizce telaffuzunu temsil eden dört karakter uzunluğunda alfanümerik bir dizedir.

Kullanım:
string soundex ( string $string )

Parametreler:
- $string: Soundex anahtarı hesaplanacak dizge.

Dönen Değerler:
- Dizgenin soundex anahtarı. Başarısızlık durumunda FALSE döner.

*/

echo soundex("example"); // Çıkıt: E251
