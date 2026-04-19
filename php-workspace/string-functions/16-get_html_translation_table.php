<?php

/*
Tanım:
get_html_translation_table() işlevi, HTML öğelerini ve karakterlerini dönüştürmek için kullanılan bir tablo döndürür.

Kullanım:
get_html_translation_table(function,flags,character-set)
function: İsteğe bağlı. Dönüştürme tablosu türünü belirler. Varsayılan değer: HTML_SPECIALCHARS.
HTML_SPECIALCHARS: HTML öğelerini ve karakterlerini dönüştürür.
HTML_ENTITIES: HTML öğelerini ve karakterlerini dönüştürür.

flags: İsteğe bağlı. Dönüştürme tablosunun türünü belirler. Varsayılan değer: ENT_COMPAT.
ENT_COMPAT: Yalnızca çift tırnak işaretlerini dönüştürür.
ENT_QUOTES: Yalnızca tek tırnak işaretlerini dönüştürür.
ENT_NOQUOTES: Hiçbir tırnak işaretini dönüştürmez.

character-set: İsteğe bağlı. Dönüştürme tablosunun karakter kümesini belirler. Varsayılan değer: ISO-8859-1.
UTF-8: UTF-8 karakter kümesini belirler.
ISO-8859-1: ISO-8859-1 karakter kümesini belirler.
...
*/

print_r(get_html_translation_table());

/* Çıktı:
Array
(
    ["] => &quot;
    [&] => &amp;
    ['] => &#039;
    [<] => &lt;
    [>] => &gt;
)
*/