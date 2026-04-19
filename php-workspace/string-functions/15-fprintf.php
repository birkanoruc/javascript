<?php

/*
Tanım:
fprintf() işlevi, bir dosyaya biçimlendirilmiş bir dize yazar.

Kullanım:
fprintf(file, format, arg1, arg2, ...)
file: Gerekli. Yazılacak dosya.
format: Gerekli. Yazılacak dizenin biçimi.
%%: Yüzde işareti. (örneğin %s, %d, %f)
%b: İkili biçimde. (örneğin 1101)
%c: Karakter olarak. (örneğin A)
%d: İkili biçimde. (örneğin 12)
%e: Bilimsel biçimde (örneğin 1.2e+2).
%u: İkili biçimde. (örneğin 12)
%f: Ondalık biçimde. (örneğin 12.34)
%o: Sekizli biçimde. (örneğin 15)
%s: Dize olarak. (örneğin Hello World!)
%x: Onaltılı biçimde. (örneğin 1a)
%X: Onaltılı biçimde (büyük harf).

arg1: İsteğe bağlı. Yazılacak diğer dizeler.
arg2: İsteğe bağlı. Yazılacak diğer dizeler.
*/

$file = fopen("test.txt", "w");

if (!$file) {
    echo "Dosya açılamadı!";
} else {
    $str = "Hello World!";
    fprintf($file, "%s", $str);
    fclose($file);
}

// test.txt dosyasında "Hello World!" yazacak.