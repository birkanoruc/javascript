<?php

/*
Tanım:
htmlentities() işlevi, bir dizenin HTML öğelerini kodlar.

Not: htmlspecialchars() işlevi de benzer bir işlevdir. htmlentities() işlevi, htmlspecialchars() işlevinden daha yavaştır ve tüm karakterleri dönüştürür.

Kullanım:
htmlentities(string, flags, encoding, double_encode)
string: Gerekli. İşlenecek dize.
flags: İsteğe bağlı. İşlem sırasında kullanılacak özel işlem bayrakları.
encoding: İsteğe bağlı. Dönüştürülecek karakter kümesi. Varsayılan değeri UTF-8'dir.
double_encode: İsteğe bağlı. Varsayılan değeri true olan bu bayrak, dönüştürme işlemi sırasında zaten kodlanmış karakterleri tekrar kodlamayı engeller.
*/

$str = "<p>Hello World!</p>";

echo htmlentities($str);
// Çıktı: &lt;p&gt;Hello World!&lt;/p&gt;