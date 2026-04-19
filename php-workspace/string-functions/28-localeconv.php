<?php

/*
Tanım:
localeconv() işlevi, yerel para birimi biçimlendirme bilgilerini içeren bir diziyi döndürür.

Kullanım:
localeconv()

Dönen değerler:
decimal_point: Ondalık ayırıcı.
thousands_sep: Binlik ayırıcı.
int_curr_symbol: Ulusal para birimi simgesi.
currency_symbol: Para birimi simgesi.
mon_decimal_point: Para birimi için ondalık ayırıcı.
mon_thousands_sep: Para birimi için binlik ayırıcı.
positive_sign: Pozitif sayılar için işaret.
negative_sign: Negatif sayılar için işaret.
int_frac_digits: Para birimi için ondalık basamak sayısı.
frac_digits: Ondalık basamak sayısı.
p_cs_precedes: Para birimi simgesi pozitif sayıların önünde mi yoksa arkasında mı yer alır?
p_sep_by_space: Para birimi simgesi ve sayı arasında boşluk var mı?
n_cs_precedes: Para birimi simgesi negatif sayıların önünde mi yoksa arkasında mı yer alır?
n_sep_by_space: Para birimi simgesi ve sayı arasında boşluk var mı?
p_sign_posn: Pozitif işaretin konumu.
n_sign_posn: Negatif işaretin konumu.
grouping: Binlik ayırıcılar arasındaki gruplama.
mon_grouping: Para birimi için binlik ayırıcılar arasındaki gruplama.
*/

setlocale(LC_ALL, 'tr_TR.UTF-8'); // Türkçe yerel ayarları belirleme

$locale_info = localeconv();

print_r($locale_info);
/* Çıktı:
Array
(
    [decimal_point] => ,
    [thousands_sep] => .
    [int_curr_symbol] => TRY
    [currency_symbol] => ₺
    [mon_decimal_point] => ,
    [mon_thousands_sep] => .
    [positive_sign] => 
    [negative_sign] => -
    [int_frac_digits] => 2
    [frac_digits] => 2
    [p_cs_precedes] => 1
    [p_sep_by_space] => 0
    [n_cs_precedes] => 1
    [n_sep_by_space] => 0
    [p_sign_posn] => 1
    [n_sign_posn] => 1
    [grouping] => Array
        (
            [0] => 3
            [1] => 3
        )

    [mon_grouping] => Array
        (
            [0] => 3
            [1] => 3
        )

)
*/
