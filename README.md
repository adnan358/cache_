cache_
======

Php cache Sistemi için class
-----------------------------

$cache = new cache_(cache_path,cache_time);

Yukarıdaki kodu sayfanın en başına yazıyoruz.

Varsa istediğimiz cache yolunu yazıyoruz yoksa varsayılan olarak kendisi cache adında dosya olusturuyor.

cache_time cache dosyasının süresi, bos bırakırsak cachelenen dosya tekrar kontrol edilmez.

sayfanın en sonunada ise;