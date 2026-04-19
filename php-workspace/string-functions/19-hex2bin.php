<?php

/*
Tanım:
hex2bin() işlevi, bir onaltılık dizeyi ikili dizeye dönüştürür.
Bu işlev, hex2bin() işlevi tarafından kodlanmış bir diziyi dönüştürmek için kullanılır.

Kullanım:
hex2bin(string)
string: Gerekli. Dönüştürülecek onaltılık dize.
*/

$str = "48656c6c6f20576f726c6421";

echo hex2bin($str);
// Çıktı: Hello World!