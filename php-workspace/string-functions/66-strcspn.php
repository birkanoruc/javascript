<?php

/*
Tanım:
strcspn() işlevi, bir dizgede belirtilen karakterlerden herhangi birinin ilk geçtiği konuma kadar olan kısmın uzunluğunu döndürür.

Kullanım:
int strcspn ( string $dizge , string $karakterler [, int $başlangıç [, int $uzunluk ]] )

Parametreler:
- $dizge: İçinde arama yapılacak olan dizge.
- $karakterler: $dizge içinde aranan karakterler kümesi.
- $başlangıç (isteğe bağlı): Aramanın başlayacağı dizge içindeki konum. Varsayılan değer 0'dır.
- $uzunluk (isteğe bağlı): Aramanın yapılacağı dizge parçasının uzunluğu. Varsayılan olarak dizgenin sonuna kadar aranır.

Dönen Değer:
Belirtilen karakterlerden herhangi birinin ilk geçtiği konuma kadar olan kısmın uzunluğunu döndürür.
*/

echo strcspn("Hello world!", "w");
// Çıktı: 6
