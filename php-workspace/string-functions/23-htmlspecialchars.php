<?php

/*
Tanım:
htmlspecialchars() işlevi, HTML öğelerini uygun şekilde kodlar.
Bu işlev, HTML öğelerini uygun şekilde kodlamak için kullanılır.

Not: htmlentities() işlevi de benzer bir işlevdir. htmlspecialchars() işlevi, htmlentities() işlevinden daha hızlıdır ve yalnızca bazı karakterleri dönüştürür.

Kullanım:
htmlspecialchars(string,flags,encoding,double_encode)
string: Gerekli. İşlenecek dize.
flags: İsteğe bağlı. İşlem sırasında kullanılacak özel işlem bayrakları.
encoding: İsteğe bağlı. Dönüştürülecek karakter kümesi. Varsayılan değeri UTF-8'dir.
double_encode: İsteğe bağlı. Varsayılan değeri true olan bu bayrak, dönüştürme işlemi sırasında zaten kodlanmış karakterleri tekrar kodlamayı engeller.
*/

$str = "<p>Hello World!</p>";

echo htmlspecialchars($str);
// Çıktı: &lt;p&gt;Hello World!&lt;/p&gt;