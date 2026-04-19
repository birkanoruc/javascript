<?php

/*
Tanım:
str_pad — Bir dizgeyi belirtilen uzunlukta başka bir dizge ile doldurarak tamamlar.

Kullanım:
str_pad(string,length,pad_string,pad_type)

Parametreler:
- $string: Tamamlanacak dizge.
- $length: Tamamlanmış dizgenin istediğiniz uzunluğu. Eğer bu uzunluk $string dizgesinin uzunluğundan küçükse, hiçbir şey yapılmaz ve $string aynen geri döndürülür.
- $pad_string: (İsteğe bağlı) $input dizgesini tamamlamak için kullanılacak dizge. Varsayılan olarak boşluk karakteri kullanılır.
- $pad_type: (İsteğe bağlı) Tamamlama türü. STR_PAD_RIGHT, STR_PAD_LEFT veya STR_PAD_BOTH olabilir. Varsayılan olarak STR_PAD_RIGHT kullanılır.
STR_PAD_RIGHT: Dizgenin sağ tarafına $pad_string eklenerek tamamlanır.
STR_PAD_LEFT: Dizgenin solda $pad_string eklenerek tamamlanır.
STR_PAD_BOTH: Dizgenin solda ve sağda $pad_string eklenerek tamamlanır.

Dönen Değerler:
Tamamlanmış dizge.
*/

$input = "Hello";
$pad_length = 10;
$pad_string = "World";
$pad_type = STR_PAD_LEFT;

$result = str_pad($input, $pad_length, $pad_string, $pad_type);

echo $result; // Çıktı: "WorldHello"