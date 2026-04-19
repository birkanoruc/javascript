<?php

/*
Tanım ve Kullanım
array_search() işlevi, bir dizide belirli bir değeri arar ve eşleşen anahtarın ilk bulunduğu konumu döndürür.
array_search(value, array, strict)
value: Aranacak değer.
array: Arama yapılacak dizi.
strict: Opsiyonel. Bu parametre true olarak ayarlanırsa, arama katı bir şekilde yapılır. Bu, aranan değerin ve anahtarın aynı türde olmasını gerektirir.
*/

$names = array("John", "Sally", "Jane", "Peter", "John", "Jane", "Peter", "John", "Jane", "Peter");

echo array_search("Jane", $names);
// Çıktı: 2

echo array_search("Jane", $names, true);
// Çıktı: 2