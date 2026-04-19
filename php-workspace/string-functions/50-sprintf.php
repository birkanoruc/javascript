<?php

/**
 * Tanım:
 * sprintf işlevi, belirtilen biçimlendirme kurallarına göre bir dize oluşturur ve bu dizeyi döndürür. 
 * Bu işlev, değişkenlerin belirli bir biçimde biçimlendirilmesini sağlar.
 *
 * Kullanım:
 * string sprintf ( string $format [, mixed $values [, mixed $... ]] )
 *
 * Parametreler:
 * - $format: Biçimlendirme dizesi. Bu dize, yer tutucular (örn. %d, %s) içerebilir.
 * - $values: Biçimlendirme dizesindeki yer tutucuların yerine geçecek değerler. Birden fazla değer belirtilebilir.
 *
 * Örnek:
 * $number = 9;
 * $str = sprintf("Bu bir sayı: %d", $number);
 * echo $str; // Çıktı: Bu bir sayı: 9
 */

$number = 9;

$str = sprintf("Bu bir sayı: %d", $number);

echo $str . PHP_EOL; // Çıktı: Bu bir sayı: 9

$string = "Hello World!";

$str = sprintf("Bu bir string %s", $string);

echo $str; // Çıktı: Bu bir string Hello World!