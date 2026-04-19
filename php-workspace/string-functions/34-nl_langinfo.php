<?php

/*
Tanım: nl_langinfo() fonksiyonu, belirli bir yerel ayar öğesinin değerini döndürür. 
Bu fonksiyon, mevcut yerel ayarlar hakkında bilgi almak için kullanılır ve 
tarih formatı, para birimi sembolü gibi yerel ayarlara özgü bilgileri sağlar.

Kullanım:
nl_langinfo(int $item): string|false

$item: İşlenecek yerel ayarın türkçeye çevrilmiş hali. Özellikler:
CODESET	Karakter kodlamasını döndürür (örn. UTF-8).
D_T_FMT	Tam tarih ve saat biçimi (örn. %Y-%m-%d %H:%M:%S).
D_FMT	Tarih biçimi (örn. %d/%m/%Y).
T_FMT	Saat biçimi (örn. %H:%M:%S).
T_FMT_AMPM	12 saatlik biçimde saat gösterimi (örn. %I:%M:%S %p).
AM_STR	Sabah saatleri için gösterilecek kısaltma (AM).
PM_STR	Öğleden sonra saatleri için gösterilecek kısaltma (PM).
DAY_1 - DAY_7	Haftanın günleri (örn. Pazartesi, Salı …).
ABDAY_1 - ABDAY_7	Günlerin kısaltmaları (örn. Paz, Sal …).
MON_1 - MON_12	Ay isimleri (örn. Ocak, Şubat …).
ABMON_1 - ABMON_12	Ay isimlerinin kısaltmaları (örn. Oca, Şub …).
CRNCYSTR	Para birimi sembolü (örn. ₺). (Bazı sistemlerde desteklenmez.)
INT_CURR_SYMBOL	Uluslararası para birimi sembolü (örn. TRY). (Bazı sistemlerde desteklenmez.)
CURRENCY_SYMBOL	Yerel para birimi sembolü (örn. ₺). (Genellikle MacOS ve bazı Linux sistemlerinde tanımlı değil.)
YESSTR	“Evet” kelimesinin yerel dildeki karşılığı.
NOSTR	“Hayır” kelimesinin yerel dildeki karşılığı.
YESEXPR	“Evet” cevabı için düzenli ifade.
NOEXPR	“Hayır” cevabı için düzenli ifade.
*/

// Yerel ayarı Türkçe olarak ayarlayalım
setlocale(LC_ALL, 'tr_TR.UTF-8');

// Haftanın ilk gününün kısaltmasını alalım
echo "Haftanın ilk günü: " . nl_langinfo(DAY_1) . PHP_EOL; // Haftanın ilk günü

// Tarih formatını alalım
echo "Tarih formatı: " . nl_langinfo(D_FMT) . PHP_EOL;
