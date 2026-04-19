<?php

/*
Tanım:
strpbrk — Bir dizgede belirtilen karakterlerden herhangi birinin ilk geçtiği yeri bulur.

Kullanım:
string strpbrk ( string $haystack , string $char_list )

Parametreler:
- $haystack: İçinde arama yapılacak olan dizge.
- $char_list: Aranacak karakterlerin listesi.

Dönen Değerler:
Belirtilen karakterlerden herhangi birinin ilk geçtiği yerden itibaren dizgenin geri kalan kısmını döner. Eğer karakterlerden hiçbiri bulunamazsa FALSE döner.

Örnek Kullanım:
*/
$haystack = "Hello World!";
$char_list = "oW";
$result = strpbrk($haystack, $char_list);

if ($result !== false) {
    echo "Karakter bulundu: " . $result;
} else {
    echo "Karakter bulunamadı.";
}

// Çıktı: Karakter bulundu: o World!