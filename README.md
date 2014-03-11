cache_
======

Php cache Sistemi için class
-----------------------------

<h5>
include('cache.php');<br>
$cache = new cache_(cache_path,cache_time);
</h5>

Yukarıdaki kodu sayfanın en başına yazıyoruz.

Varsa istediğimiz cache yolunu yazıyoruz yoksa varsayılan olarak kendisi cache adında dosya olusturuyor.

cache_time cache dosyasının süresi, bos bırakırsak cachelenen dosya tekrar kontrol edilmez.

sayfanın en sonunada ise;

<h5>$cache->cache_end();</h5>

yazıyoruz ve hersey tamamlanıyor.
