<?php

/*
Tanım:
levenshtein() işlevi, iki dize arasındaki Levenshtein mesafesini hesaplar.
Levenshtein mesafesi, iki dize arasındaki karakterlerin değiştirilmesi, ekleme veya çıkarma sayısını belirler.
Bu mesafe, iki dize arasındaki benzerlik derecesini belirler. Daha düşük mesafe, daha fazla benzerlik anlamına gelir.

Kullanım:
levenshtein(string1, string2, cost_insert, cost_replace, cost_delete)
string1: Gerekli. Karşılaştırılacak ilk dize.
string2: Gerekli. Karşılaştırılacak ikinci dize.
cost_insert: İsteğe bağlı. Bir karakterin eklenmesi durumunda maliyet. Varsayılan değeri 1'dir.
cost_replace: İsteğe bağlı. Bir karakterin değiştirilmesi durumunda maliyet. Varsayılan değeri 1'dir.
cost_delete: İsteğe bağlı. Bir karakterin silinmesi durumunda maliyet. Varsayılan değeri 1'dir.
*/

echo levenshtein("Hello World", "ello World");
// Çıktı: 1

echo "\n";

/*
“Hello World” ile “ello World” karşılaştırılıyor.
Fark: İlk kelimede "H" var, ikinci kelimede "H" eksik.
“H” harfini kaldırmamız gerekiyor.
Silme işleminin maliyeti $cost_delete = 30 olduğu için sonuç 30 olur.
*/
echo levenshtein("Hello World", "ello World", 10, 20, 30);
// Çıktı: 30