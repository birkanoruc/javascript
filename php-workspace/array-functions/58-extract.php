<?php

/*
Tanım:
extract() işlevi, bir dizinin anahtarlarını değişken adları yapar ve değerlerini değişken değerlerine atar.

Kullanım:
extract(array, extract_rules, prefix)
array: Gerekli. İşlenecek dizi.
extract_rules: İsteğe bağlı. Bir veya daha fazla sabit veya değişkeni içeren bir bit maske.
prefix: İsteğe bağlı. Değişken adlarının önüne eklenen bir ön ek.
*/

$colors = array("red" => "apple", "green" => "lime", "blue" => "blueberry");

extract($colors);

echo $red . "\n";
echo $green . "\n";
echo $blue . "\n";
/* Çıktı:
apple
lime
blueberry
*/
