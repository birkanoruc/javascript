<?php

/*
Tanım:
bin2hex() işlevi, bir dizenin ikili verilerini onaltılık sayılarla değiştirir.

Kullanım:
bin2hex(string)
string: Gerekli. İşlenecek dize.
*/

$str = "Hello World!";

echo bin2hex($str);
// Çıktı: 48656c6c6f20576f726c6421