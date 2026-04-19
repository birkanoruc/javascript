<?php

/*
Tanım:
str_getcsv() işlevi, bir CSV (Comma-Separated Values) biçimindeki dizeyi ayrıştırarak bir diziye dönüştürür.

Kullanım:
array str_getcsv(string $input, string $delimiter = ",", string $enclosure = '"', string $escape = "\\")

Parametreler:
- $input (string): Ayrıştırılacak CSV dizesi.
- $delimiter (string): CSV değerlerini ayırmak için kullanılan karakter. Varsayılan olarak virgül (",") kullanılır.
- $enclosure (string): CSV değerlerini çevrelemek için kullanılan karakter. Varsayılan olarak çift tırnak (") kullanılır.
- $escape (string): Kaçış karakteri. Varsayılan olarak ters eğik çizgi ("\") kullanılır.

Dönen Değer:
- array: CSV dizesinden ayrıştırılan değerleri içeren bir dizi döner.
*/

$csv = "John,Doe,1990,New York";
$result = str_getcsv($csv, ",", '"');

print_r($result);
/* Output: 
Array
(
    [0] => John
    [1] => Doe
    [2] => 1990
    [3] => New York
)
*/