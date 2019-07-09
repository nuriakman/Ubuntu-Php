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

    echo "\$meyve değişkeni ".gettype($meyve)." türündedir.<br>";
    echo "\$adet"." değişkeni ". gettype($adet)." türündedir.<br>";
    echo "\$yarimkilo"." değişkeni ". gettype($yarimkilo)." türündedir.<br>";
    echo "\$tatlimi"." değişkeni ". gettype($tatlimi)." türündedir.<br>";
    echo "\$meyveler"." değişkeni ". gettype($meyveler)." türündedir.<br>";
    echo "\$varmi"." değişkeni ".gettype($varmi)." türündedir.";

?>
```
Ekran Görüntüsü,
```sh
  $meyve değişkeni string türündedir.
  $adet değişkeni integer türündedir.
  $yarimkilo değişkeni double türündedir.
  $tatlimi değişkeni boolean türündedir.
  $meyveler değişkeni array türündedir.
  $varmi değişkeni NULL türündedir.
```


[Yazım Kuralları](https://github.com/yeniceri1453/Ubuntu-Php/tree/master/notlar/yazim_kurallari.md) :arrow_left: [ANASAYFA](https://github.com/yeniceri1453/Ubuntu-Php) :arrow_right: [Değişkenlerin Kullanımı](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/degiskenler.md)
