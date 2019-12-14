# WHILE DÖNGÜSÜ

Koşul doğru olduğu sürece döner. Bu sebepten dolayı biraz tehlikelidir. Uygun kullanılmazsa ***SONSUZ*** döngüye girer. Normalde **for** döngüsü ile aynı işi yapar.

Kullanımı;

```php
  while (KOŞUL) { }
```

Örnek;

```php
  $a=1;

  while ($a <= 10) {
    echo $a;
    $a++;
  }
```
Ekran çıktısı;

```php
  12345678910
```

 `$a++;` satırını eklemezsek, değişkenin değeri 10'dan küçük olduğu için sürekli döner. Bu satır sayesinde her dönüşte bir artırarak 10 sayısına gelince(eşit olunca) duracak!
