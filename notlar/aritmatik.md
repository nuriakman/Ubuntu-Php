## Aritmatik Operatörler

Matematik işlemleri için kullanılırlar. Aşağıdaki tabloda operatörler görülmektedir.

| Operatör | Açıklama |
|----|----|
| \* | Çarpma operatörü. |
| \/ | Bölme operatörü. |
| \+ | Toplama operatörü |
| \- | Çıkarma operatörü. |
| \% | Mod (Kalan) |

Örnek Operatör İşlemleri;
```php
<?php
    $a = 15;
    $b = 5;
    $c = 4;

  //Çarpma işlemine örnek.
  echo  $a * $b ."<br>";  // Ekran çıktısı 75 dir.
  //Bölme işlemine örnek.
  echo  $a / $b ."<br>";  // Ekran çıktısı 3 dür.
  //Toplama işlemine örnek.
  echo  $a + $b ."<br>";  // Ekran çıktısı 20 dir.
  //Çıkarma işlemine örnek.
  echo  $a - $b ."<br>";  // Ekran çıktısı 10 dur.
  //Mod(Kalan) işlemine örnek.
  echo  $a % $c;  // Ekran çıktısı kalan 3 dür.
?>
```

Yalnız, matematiksel operatörleri kullanırken işlem sırasına(önceliğine) dikkat etmek gerekmektedir.

**İşlem Önceliği**

- Üs alma işlemleri
- Parantez içindeki işlemler
- Çarpma veya Bölme İşlemi
- Toplama veya Çıkarma İşlemi

*Önemli Not: Eğer aynı önceliğe sahip işlemler varsa (Örneğin bir işlemde hem çarpma hem de bölme varsa) işlemler soldan sağa doğru yapılır.*


[Sihirli Karakterler](sihirli_karakterler.md) :arrow_left: [ANASAYFA](../../../) :arrow_right: [Atama Operatörleri](atama.md)
