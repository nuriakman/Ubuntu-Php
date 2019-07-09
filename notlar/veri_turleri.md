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
    $yokmu = " ";

    echo "\$meyve değişkeninin değeri \"$meyve\" türü ise \"".gettype($meyve)."\" dir.<br>";
    echo "\$adet değişkeninin değeri \"$adet\" türü ise \"".gettype($adet)."\" dir.<br>";
    echo "\$yarimkilo değişkeninin değeri \"$yarimkilo\" türü ise \"".gettype($yarimkilo)."\" dır.<br>";
    echo "\$tatlimi değişkeninin değeri \"$tatlimi\" türü ise \"".gettype($tatlimi)."\" dir.<br>";
    echo "\$varmi değişkeninin değeri \"$varmi\" türü ise \"".gettype($varmi)."\" dır.<br>";
    echo "\$yokmu değişkeninin değeri \"$yokmu\" türü ise \"".gettype($yokmu)."\" dir. Bir araçubuğu boşluk var.<br><br>";
    echo "\$meyveler değişkeninin değeri; <br><pre>";
    print_r($meyveler);
    echo "</pre>türü ise \"".gettype($meyveler)."\" dir.";
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
