## PRINTF(), SPRINTF(), VPRINTF() VE VSPRINTF() FONKSİYONLARI

Not: sprintfve vsprintf ekrana ancak `echo` ile yazdırılabilir. Dört fonksiyonda aynı işlemi yapar.

Diyelim ki "*Afrika'da 5 tane maymun var.*" cümlesini dinamik olarak ekrana yazdırmak istiyoruz. Önce değişkenlerimizi oluşturalım;

```php
  $yer = "Afrika";
  $sayi = 5;
  $tur = "maymun";
```
Bunu normal olarak ekrana `echo "$yer'da $sayi tane $tur var.";` bu şekilde yazdırırız. Şimdi bunu `printf()` fonksiyonu ile yazdıralım.

```php
  printf('%s\'da %s tane %s var.', $yer, $sayi, $tur);
```
Burada ne kadar "***%s***" varsa arkadaşlar, ilk virgülden sonra o kadar veri olması gerekir. Aslında "***%s***"'lerin yerine direkt olarak değişkenleri yazıp, `echo` ile ekrana basabilirdik. Şimdi birde alttaki örneğe bakalım.

```php
  $tarih = '2-7-1969';

  vprintf('%02d-%02d-%d', explode('-', $tarih));
```
Ekran çıktısı;
```php
  02-07-1969
```
