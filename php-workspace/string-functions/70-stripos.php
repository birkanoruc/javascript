<?php

/*
Tanım:
stripos() işlevi, bir dizgede belirtilen alt dizgenin ilk geçtiği konumu bulur ve büyük/küçük harf duyarsız bir arama yapar.

Kullanım:
int stripos ( string $haystack , string $needle [, int $offset = 0 ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan ana dizge.
- $needle: Aranacak olan alt dizge.
- $offset: (İsteğe bağlı) Aramaya başlanacak olan dizge konumu. Varsayılan değer 0'dır.

Dönen Değer:
- Alt dizgenin ilk geçtiği konumun dizinini döner. Eğer alt dizge bulunamazsa FALSE döner.
*/

echo stripos("Hello, World!", "o");
// Çıktı: 4