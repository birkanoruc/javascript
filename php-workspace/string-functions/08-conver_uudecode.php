<?php

/*
Tanım:
convert_uudecode() işlevi, bir uuencode edilmiş diziyi orijinal biçimine dönüştürür.
Bu işlev, uuencode() işlevi tarafından kodlanmış bir diziyi dönüştürmek için kullanılır.

Kullanım:
convert_uudecode(string)
string: Gerekli. Dönüştürülecek uuencode edilmiş dize.
*/

$str = "+22!L;W9E(%!(4\"$`\n`";

echo convert_uudecode($str);
// Çıktı: I love PHP!