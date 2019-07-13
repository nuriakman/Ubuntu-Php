# ANONİM FONKSİYONLAR

Anonim fonksiyonlar, bir fonksiyon ismi kullanılmadan oluşturulan fonksiyonlardır. Genellikle, bir fonksiyonun parametresi olarak tanımlanır ve o fonksiyona bir argüman değeri sağlarlar. Anonim fonksiyonlara da parametre verilebilir ve dizi içerisinde de kullanılabilir.

Örnek;

```php
  $topla = function($sayi1, $sayi2){
    return $sayi1 + $sayi2;
  };

  echo $topla(2, 5);
```

Örnek;

```php
  $anonim = function ($parametre)
  {
      echo "$parametre<br/>";
  };

  $anonim('Hasan Çiçek');
```
