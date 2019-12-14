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
  $meyve değişkeninin değeri "elma" türü ise "string" dir.
  $adet değişkeninin değeri "15" türü ise "integer" dir.
  $yarimkilo değişkeninin değeri "0.5" türü ise "double" dır.
  $tatlimi değişkeninin değeri "1" türü ise "boolean" dir.
  $varmi değişkeninin değeri "" türü ise "NULL" dır.
  $yokmu değişkeninin değeri " " türü ise "string" dir. Bir araçubuğu boşluk var.

  $meyveler değişkeninin değeri;

  Array
  (
      [0] => elma
      [1] => armut
      [2] => muz
      [3] => ayva
  )

  türü ise "array" dir.
```
