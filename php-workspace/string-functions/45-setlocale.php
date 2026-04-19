<?php

/*
Tanım:
setlocale() işlevi, yerel ayarları belirlemek veya sorgulamak için kullanılır. Bu işlev, tarih, saat, sayı ve para birimi biçimlendirme gibi yerel ayarları etkiler.

Kullanım:
string setlocale ( int $category , string $locale [, string $... ] )

Parametreler:
- $category: Ayarlanacak yerel ayar kategorisi. Örneğin, LC_TIME, LC_NUMERIC, LC_MONETARY gibi sabitler kullanılabilir.
LC_ALL - Aşağıdakilerin tümü
LC_COLLATE - Sıralama düzeni
LC_CTYPE - Karakter sınıflandırma ve dönüştürme (örneğin, tüm karakterlerin küçük veya büyük harf olması)
LC_MESSAGES - Sistem mesajı biçimlendirme
LC_MONETARY - Para birimi biçimlendirme
LC_NUMERIC - Sayısal biçimlendirme
LC_TIME - Tarih ve saat biçimlendirme

- $locale: Ayarlanacak yerel ayar. Örneğin, "en_US.UTF-8", "tr_TR.UTF-8" gibi yerel ayar dizeleri kullanılabilir.
- $...: Birden fazla yerel ayar belirtmek için ek yerel ayar dizeleri.

*/

// Türkçe yerel ayarları uygulamak için
setlocale(LC_ALL, 'tr_TR.UTF-8');

// Yerel ayarı getirmek için
echo "Yerel Ayar: " . setlocale(LC_ALL, 0) . PHP_EOL;

// Yerel ayarı değiştirmek için
setlocale(LC_ALL, 'en_US.UTF-8');

// Yerel ayarı tekrar getirmek için
echo "Yerel Ayar: " . setlocale(LC_ALL, 0) . PHP_EOL;

/* Çıktı:
Yerel Ayar: tr_TR.UTF-8
Yerel Ayar: en_US.UTF-8
*/