<?php

/**
 *
 * Tanım:
 * str_rot13() işlevi, bir dizgeyi ROT13 şifreleme algoritması kullanarak dönüştürür. 
 * ROT13, alfabenin harflerini 13 pozisyon kaydırarak basit bir şifreleme sağlar.
 *
 * Kullanım:
 * string str_rot13(string $string)
 *
 * Parametreler:
 * - string $string: Dönüştürülecek olan dizge.
 *
 * Dönüş Değeri:
 * - string: ROT13 ile dönüştürülmüş dizge.
 */

$text = "Hello, World!";
$rot13Text = str_rot13($text);

echo "ROT13 şifrelenmiş dizge: $rot13Text" . PHP_EOL;
// Çıktı: ROT13 şifrelenmiş dizge: Uryyb, Jbeyq!
