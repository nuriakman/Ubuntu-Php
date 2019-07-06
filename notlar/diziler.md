## Dizi Oluşturmak

Diziler çoklu veri tutmaya yarayan yapılardır.

Dizilerin özellikleri;
- array() fonksiyonu ile oluşturulur,
- Her elemanının bir indis değeri olur ve bu indislere biz müdahale etmediğimiz sürece indis numarası 0 dan başlar,
- Dizinin boyutu birden fazla olabilir,
- İndisi string bir değer olabilir,
- Elemanlarına köşeli parantezler içine indis değeri yazılarak ulaşılır,
- Eleman sayısına count() fonksiyonu ile ulaşırız.

Örnek;

#### Dizi Oluşturma

**1. Yol:** Sadece değerleri girerek oluşturmak. İndis numarası otomatik oluşur.

```php
<?php
      $kimlik = array ( "Hasan", "Çiçek", "Eğitmen", "50");
?>
```

**2. Yol:** İndis numarasını girerek oluşturmak.

```php
<?php
      $kimlik = array (
          [0] => "Hasan",
          [1] => "Çiçek",
          [2] => "Eğitmen",
          [3] => "50"
      );
?>
```

**3. Yol:** İndislerini kendimiz vererek oluşturabiliriz. Bu veri çekerken hatırlanabilir olur.

```php
<?php

  $kimlik = array (
      'ad'      => "Hasan",
      'soyad'   => "Çiçek",
      'meslek'  => "Eğitmen",
      'yas'     => "50"
  );

  print_r($kimlik); # Dizi içerisinde ne geldiğine bakıyoruz.

?>
```

Dizi içerisinden bir elemanı çekmek istersek;

```php
<?php

  $kimlik = array (
      'ad'      => "Hasan",
      'soyad'   => "Çiçek",
      'meslek'  => "Eğitmen",
      'yas'     => "50"
  );

  echo $kimlik['meslek']; # Mesleğinin ne olduğunu sorduk.

?>
```
Ekran çıktısı;

```sh

  Eğitmen

```


[Mantıksal Operatörler](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/mantiksal.md) :arrow_left: [ANASAYFA](https://github.com/yeniceri1453/Ubuntu-Php) :arrow_right: [İç İçe Dizi Oluşturmak](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/ic_ice_diziler.md)
