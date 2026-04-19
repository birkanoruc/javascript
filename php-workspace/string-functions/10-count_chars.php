<?php

/*
Tanım:
count_chars() işlevi, bir dizgedeki karakterlerin sayısını döndürür.

Kullanım:
count_chars(string, mode)
string: Gerekli. İşlenecek dize.
mode: İsteğe bağlı. Dönüşüm modu. Varsayılan değeri 0'dır. 1, 2, 3 ve 4 değerlerini alabilir.
0: Dizgedeki tüm karakterlerin sayısını döndürür.
1: Dizgede bulunan ve sadece bir kez geçen karakterleri döndürür.
2: Dizgede bulunan ve birden fazla kez geçen karakterleri döndürür.
3: Dizgede bulunmayan karakterleri döndürür.
4: Dizgede bulunmayan ve sadece bir kez geçen karakterleri döndürür.
*/

$str = "Hello World!";

echo count_chars($str, 3);
// Çıktı: !HWdelor