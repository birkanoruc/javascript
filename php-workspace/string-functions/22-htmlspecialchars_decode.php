<?php

/*
Tanım:
htmlspecialchars_decode() işlevi, bir HTML kodunu normal metne dönüştürür.
Bu işlev, htmlspecialchars() işlevi tarafından kodlanmış bir HTML kodunu dönüştürmek için kullanılır.

Kullanım:
htmlspecialchars_decode(string,flags)
string: Gerekli. Dönüştürülecek HTML kodu.
flags: İsteğe bağlı. Dönüştürme türünü belirler. Varsayılan değer: ENT_COMPAT.
ENT_COMPAT: Yalnızca çift tırnak işaretlerini dönüştürür.
ENT_QUOTES: Yalnızca tek tırnak işaretlerini dönüştürür.
ENT_NOQUOTES: Hiçbir tırnak işaretini dönüştürmez.
*/

$str = "&lt;p&gt;Hello World!&lt;/p&gt;";

echo htmlspecialchars_decode($str);
// Çıktı: <p>Hello World!</p>