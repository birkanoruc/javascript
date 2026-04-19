<?php

/*
Tanım:
quoted_printable_decode() işlevi, Quoted-Printable olarak kodlanmış bir dizeyi çözümler.

Kullanım:
quoted_printable_decode(string $input): string

Dönen Değer:
Kodlanmış metni çözümler ve normal bir dize olarak döndürür.

Quoted-Printable Nedir?
- E-posta içeriklerini ve özel karakterleri ASCII formatına dönüştürmek için kullanılır.
- "=" karakteri kaçış karakteri olarak kullanılır.
- Özel karakterler "=XX" formatında (XX, karakterin ASCII karşılığıdır) gösterilir.
- Satır sonları "=CRLF" ile belirtilir.

Örnek Kullanım:
*/

$encodedText = "Merhaba=D0=9E=D1=82=D0=BE =D0=BF=D1=80=D0=BE=D1=81=D1=82=D0=BE!";
$decodedText = quoted_printable_decode($encodedText);

echo "Kodlanmış Metin: $encodedText\n";
echo "Çözümlenmiş Metin: $decodedText\n";

/*
Çıktı:
Kodlanmış Metin: Merhaba=D0=9E=D1=82=D0=BE =D0=BF=D1=80=D0=BE=D1=81=D1=82=D0=BE!
Çözümlenmiş Metin: Merhaba Просто!
*/