<?php

/*
Tanım:
quoted_printable_encode() işlevi, bir dizgeyi Quoted-Printable formatına kodlar.

Kullanım:
quoted_printable_encode(string $input): string

Dönen Değer:
Kodlanmış metni Quoted-Printable formatında döndürür.

Quoted-Printable Nedir?
- 8-bit karakterleri ASCII formatına dönüştürmek için kullanılır.
- "=" karakteri kaçış karakteri olarak kullanılır.
- Özel karakterler "=XX" formatında gösterilir (XX, karakterin ASCII karşılığıdır).
- Satır uzunluğu 76 karakteri geçmemelidir, gerekirse "=" karakteri ile satır sonlandırılır.

Örnek Kullanım:
*/

$originalText = "Merhaba! Bu bir test mesajıdır. Türkçe karakterler: üğşçöİ";
$encodedText = quoted_printable_encode($originalText);

echo "Orijinal Metin: $originalText\n";
echo "Kodlanmış Metin: $encodedText\n";

/*
Çıktı:
Orijinal Metin: Merhaba! Bu bir test mesajıdır. Türkçe karakterler: üğşçöİ
Kodlanmış Metin: Merhaba! Bu bir test mesaj=C4=B1d=C4=B1r. T=C3=BCrk=C3=A7e karakterler: =
=C3=BC=C4=9F=C5=9F=C3=A7=C3=B6=C4=B0
*/