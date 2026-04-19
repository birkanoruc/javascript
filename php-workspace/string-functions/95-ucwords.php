<?php

/**
 * Tanım:
 * ucwords() işlevi, bir dizgedeki her kelimenin ilk harfini büyük harfe dönüştürür.
 *
 * Kullanım:
 * string ucwords(string $str, string $delimiters = " \t\r\n\f\v")
 *
 * Parametreler:
 * - $str: İlk harfleri büyük harfe dönüştürülecek olan dizge.
 * - $delimiters: (İsteğe bağlı) Kelimeleri ayırmak için kullanılacak olan sınırlayıcı karakterler. Varsayılan olarak boşluk, tab, satır başı, satır sonu, form besleme ve dikey sekme karakterlerini kullanır.
 *
 * Dönüş Değeri:
 * - İlk harfleri büyük harfe dönüştürülmüş olan dizgeyi döner.
 */

$text = "hello, world!";

$ucwordsText = ucwords($text);

echo $ucwordsText; // Çıktı: Hello, World!