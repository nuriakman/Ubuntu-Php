## Değişkenlerin Kullanımı

Değişkenlerin özellikleri;
- `$` simgesi ile tanımlanırlar,
- `Harf` veya `_` simgesi ile başlarlar,
- Sayı ile başlamazlar,
- Türkçe karekter içerebilir, fakat tercih etmeyiz,
- Büyük-küçük harfe duyarlıdırlar (case-sensitive).

Değişken örnekleri;

```php
<?php
    $birinci = "Linux ";
    $_ikinci = "Yaz ";
    $üçüncÜ = "Kampı";
    $dördüncü = 2017;

    echo $birinci.$_ikinci.$üçüncÜ." ".$dördüncü;
?>
```

Not: Burada `=` atama operatörüdür.

Ekran çıktısı;
```sh
    Linux Yaz Kampı 2017
```

İpucu: Aynı isimde değişken oluşturulduğunda, son oluşturulan (alt satırdaki) değişkenin değeri geçerlidir.



[Veri Türleri](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/veri_turleri.md) :arrow_left: [ANASAYFA](https://github.com/yeniceri1453/Ubuntu-Php) :arrow_right: [Sabit Değişkenler](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/sabit_degiskenler.md)
