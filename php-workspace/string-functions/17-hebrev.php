<?php

/*
Tanım:
hebrev() işlevi, bir İbranice metni HTML uyumlu hale getirir.
Bu işlev, İbranice metni HTML uyumlu hale getirmek için kullanılır.

Kullanım:
hebrev(string, max_line_length)
string: Gerekli. İşlenecek dize.
max_line_length: İsteğe bağlı. Bir satırda kaç karakter olacağını belirler. Varsayılan değer 70.
*/

$str = "שלום עולם!";

echo hebrev($str);
// Çıktı: שלום עולם!