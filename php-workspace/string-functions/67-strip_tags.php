<?php

/*
Tanım:
strip_tags() işlevi, bir string içindeki HTML ve PHP etiketlerini kaldırır.

Kullanım:
string strip_tags ( string $str [, string $allowable_tags ] )

Parametreler:
- $str: Etiketlerin kaldırılacağı giriş stringi.
- $allowable_tags: (İsteğe bağlı) Kaldırılmaması gereken etiketlerin listesi. Bu parametre belirtilmezse, tüm etiketler kaldırılır.

Dönen Değer:
Etiketleri kaldırılmış string.
*/

$str = "<p>This is a <b>bold</b><?php echo 'test' ?> sentence.</p>";
$result = strip_tags($str);

echo $result; // Çıktı: This is a bold sentence.