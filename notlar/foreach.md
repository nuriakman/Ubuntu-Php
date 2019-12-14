# Foreach Döngüsü

"*Foreach*" döngüsü sadece dizilerde kullanılır. Bir diziyi döngüye sokarak işlem yapmamızı sağlar.

Kullanımı;

```php
  foreach ( ARRAY as KEY => VALUE) { }
```

Örneğin;

```php
  foreach ($dizi as $değer) {
    echo $değer."<br>",
  }
```

Her bir dönüşte **$dizi** değişkenindeki elemanların değerini **$değer** değişkenine atıyarak, istediğimiz işlemi bu **$değer** değişteni üzerinden yapmamızı sağlar.
