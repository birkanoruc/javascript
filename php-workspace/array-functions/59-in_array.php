<?php

/*
Tanım:
in_array() işlevi, bir dizide belirtilen bir değerin olup olmadığını kontrol eder.
Dikkat! Bu işlev, büyük/küçük harf duyarlıdır.
Dikkat! Bu işlev, dizinin anahtarlarını dikkate almaz.
Dikkat! Bu işlev, dizinin değerlerini dikkate alır.
Dikkat! Bu işlev, dizinin değerlerini karşılaştırırken katı eşitliği kullanır.

Kullanım:
in_array(search, array, type)
search: Gerekli. Aranacak değer.
array: Gerekli. İşlenecek dizi.
type: İsteğe bağlı. Eğer bu parametre true olarak ayarlanırsa, işlev, arama işlemi sırasında değerlerin türlerini de kontrol eder.
*/

$colors = array("red", "green", "blue", "yellow");

if (in_array("green", $colors)) {
    echo "Yes, 'green' is in the colors array";
} else {
    echo "No, 'green' is not in the colors array";
}
// Çıktı: Yes, 'green' is in the colors array