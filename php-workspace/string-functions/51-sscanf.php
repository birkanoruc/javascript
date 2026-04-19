<?php

/**
 * Tanım:
 * sscanf() işlevi, bir dizeyi belirli bir formata göre ayrıştırır ve ayrıştırılan değerleri değişkenlere atar.
 *
 * Kullanım:
 * sscanf(string $string, string $format, mixed &$arg1, mixed &$arg2, mixed &...$args): array|int|null
 *
 * Parametreler:
 * - string $string: Ayrıştırılacak olan giriş dizesi.
 * - string $format: Giriş dizesinin ayrıştırılacağı format.
 * - mixed &$arg1: Ayrıştırılan ilk değerin atanacağı değişken.
 * - mixed &$arg2: Ayrıştırılan ikinci değerin atanacağı değişken.
 * - mixed &...$args: Ayrıştırılan diğer değerlerin atanacağı değişkenler.
 *
 * Dönüş Değeri:
 * - Başarı durumunda, ayrıştırılan değerlerin sayısını veya bir dizi döndürür.
 * - Başarısızlık durumunda, null döner.
 */

$str = "age:30 weight:60kg";
sscanf($str, "age:%d weight:%dkg", $age, $weight);

echo "Age: $age, Weight: $weight" . PHP_EOL;
