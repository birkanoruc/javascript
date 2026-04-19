<?php

/*
Tanım:
nl2br işlevi, bir metin dizesindeki yeni satır karakterlerini (<br> HTML etiketi) ile değiştirir. 
Bu işlev, özellikle HTML çıktısı oluştururken kullanışlıdır, çünkü HTML'de yeni satır karakterleri göz ardı edilir.

Kullanım:
string nl2br(string $string, bool $is_xhtml = true)

Parametreler:
- $string: Yeni satır karakterlerinin (<br> veya <br />) ile değiştirileceği metin dizesi.
- $is_xhtml: (İsteğe bağlı) Varsayılan değer true'dur. 
XHTML uyumlu <br /> etiketi kullanmak için true, HTML uyumlu <br> etiketi kullanmak için false.

*/

$str = "Hello\nWorld!";

echo nl2br($str);

/* Çıktı:
Hello<br />
World!
*/