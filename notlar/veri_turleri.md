## Veri Türleri (Date Types)

- **Strings :** Metinler ( Php ile Web Programlama )
- **Integer :** Tam sayılar( 500, 200 vb. )
- **Float(double) :**  Ondalık sayıları ifade eder. ( 5.5, 2.3 vb. )
- **Boolean :** Doğru, yanlış (True-False)
- **Array :** Diziler ( Sınıftaki öğrencilerin isimleri vb. )
- **Object :** Nesneler ( $object= new stdClass; vb. )
- **NULL :**  Yok, boş değil.

Peki veri tipini nasıl tespit ederiz. Bunun için `gettype();`fonksiyonunu kullanırız. Fonksiyonun ne olduğundan ileride bahsedeceğiz.

Örnekler;
```php
<?php
    $meyve = "elma";
    $adet = 15;
    $yarimkilo = 0.5;
    $tatlimi = true;
    $meyveler = array(elma, armut, muz, ayva);
    $varmi = NULL;


    echo "\$meyve"." değişkeninin türü ="." ".gettype($meyve)."<br>";
    echo "\$adet"." değişkeninin türü ="." ".gettype($adet)."<br>";
    echo "\$yarimkilo"." değişkeninin türü ="." ".gettype($yarimkilo)."<br>";
    echo "\$tatlimi"." değişkeninin türü ="." ".gettype($tatlimi)."<br>";
    echo "\$meyveler"." değişkeninin türü ="." ".gettype($meyveler)."<br>";
    // ;Alt satırda boşluk bırakma diğerlerinden farklı olarak yapılmıştır.
    echo "\$varmi"." değişkeninin türü ="." ".gettype($varmi)."<br>";

?>
```
Ekran Görüntüsü,
```sh
  $meyve değişkeninin türü = string
  $adet değişkeninin türü = integer
  $yarimkilo değişkeninin türü = double
  $tatlimi değişkeninin türü = boolean
  $meyveler değişkeninin türü = array
  $varmi değişkeninin türü = NULL
```


[Yazım Kuralları](https://github.com/yeniceri1453/Ubuntu-Php/tree/master/notlar/yazim_kurallari.md) :arrow_left: [ANASAYFA](https://github.com/yeniceri1453/Ubuntu-Php) :arrow_right: [Değişkenlerin Kullanımı](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/degiskenler.md)
