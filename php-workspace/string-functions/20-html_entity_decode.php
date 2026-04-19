<?php

/*
Tanım:
html_entity_decode() işlevi, bir HTML dizesindeki tüm HTML öğelerini ve karakter referanslarını orijinal karakterlere dönüştürür.
Bu işlev, htmlspecialchars() veya htmlentities() işlevi tarafından kodlanmış bir diziyi dönüştürmek için kullanılır.

Kullanım:
html_entity_decode(string,flags,character-set)
string: Gerekli. Dönüştürülecek HTML dizesi.
flags: İsteğe bağlı. Dönüştürme türünü belirler. Varsayılan değer: ENT_COMPAT.
ENT_COMPAT: Yalnızca çift tırnak işaretlerini dönüştürür.
ENT_QUOTES: Yalnızca tek tırnak işaretlerini dönüştürür.
ENT_NOQUOTES: Hiçbir tırnak işaretini dönüştürmez.

character-set: İsteğe bağlı. Dönüştürme tablosunun karakter kümesini belirler. Varsayılan değer: ISO-8859-1.
UTF-8: UTF-8 karakter kümesini belirler.
ISO-8859-1: ISO-8859-1 karakter kümesini belirler.
...
*/

$str = "&lt;p&gt;Hello World!&lt;/p&gt;";

echo html_entity_decode($str);
// Çıktı: <p>Hello World!</p>