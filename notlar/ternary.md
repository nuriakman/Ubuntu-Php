# TERNARY (ÜÇLÜ) İFADELER

İf'in tek satırda kısaca kullanımı demektir.

```php
  KOŞUL ? DOĞRUYSA : YANLIŞSA
```

Örneğin;

```php
  $sayfa = isset($_GET['sayfa']) ? $_GET['sayfa'] : 1;
```

Burada eğer sayfa adında bir get parametresi var ise onun değerini yok ise 1 değerini $sayfa değişkenine atamış olduk. Bunu uzun olarak if koşulu ile şöyle yapabilirdik;

```php
  if ( isset($_GET['sayfa']) ){
    $sayfa = $_GET['sayfa'];
  } else {
    $sayfa = 1;
  }
```
