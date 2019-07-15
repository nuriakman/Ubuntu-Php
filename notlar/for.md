# For Döngüsü

For döngüsü belirli sayıda dönecek olan kodların kullanımında kullanılır. 3 parametre girilir. Birinci parametre döngüde kullanılacak olan ***değişkeni ve değerini*** tanımlar, ikinci parametre ***koşulu*** belirtir, üçüncü parametre ise her döndüğünde ***yapacağı işlemi*** belirtir.

```php
  for( başlangıç; koşul; her çalışmada olacak olan ) {
   // koşul doğru olduğu sürece çalışacak kod bloğu
  }
```

Örneğin; 1 den 10'a kadar saydıralım.

```php
  for ($i=1; $i<=10 ; $i++) {
    echo "$i,";
  }
```

Tek satır yazılımı;
```php
  for ($i=1; $i<=10 ; $i++):echo "$i,";endfor;
```

Ekran Çıktısı;

```php
  1,2,3,4,5,6,7,8,9,10
```

Dizilerde kullanım örneği;

```php
  $meyveler = [
      'Elma',
      'Armut',
      'Erik',
      'Üzüm',
      'Kiraz'
  ];

for ($i=0; $i<=(count($meyveler)) ; $i++) {
  echo $meyveler[$i]."<br>";
}
```

Tek satır kullanımı;

```php
for ($i=0;$i<=(count($meyveler));$i++):echo $meyveler[$i]."<br>";endfor;
```

Ekran Çıktısı;

```php
  Elma
  Armut
  Erik
  Üzüm
  Kiraz
```
