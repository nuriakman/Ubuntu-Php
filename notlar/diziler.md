## Diziler

Diziler çoklu veri tutmaya yarayan yapılardır. Bu değişkenler aynı türdedir ve tek bir ana değişken içerisinde bulunurlar.

Dizilerin özellikleri;
- `array()` fonksiyonu ile oluşturulur,
- Her elemanının bir indis değeri olur ve bu indislere biz müdahale etmediğimiz sürece indis numarası "0" dan başlar,
- Dizinin boyutu birden fazla olabilir,
- İndisi "string" bir değer olabilir,
- Elemanlarına köşeli parantezler içine indis değeri yazılarak ulaşılır,
- Eleman sayısına "count()" fonksiyonu ile ulaşırız.

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
?>
```

#### Dizileri görmek;
```php
      print_r($kimlik);
```

#### Dizi içerisinden bir elemanı görmek;
```php
<?php
      echo $kimlik['meslek'];
?>
```
