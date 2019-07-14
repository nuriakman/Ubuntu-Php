# DİZİ FONKSİYONLARI

| Fonksiyon | Açıklama |
| ----- | ----- |
| `print_r()` | Dizi yada objenin okunabilir bir şekilde, insani bir şekilde yapısını gösterir. |
| `var_dump()` | Dizi yada objenin okunabilir bir şekilde, programlama görünümünde yapısını gösterir.|
| `explode()` | Belirli bir karakterle bir birinden ayrılmış olan ifadeleri, parçalamamıza olanak sağlıyor. Kısaca o metinden istediğimiz yeri alabilmemize yarıyor.|
| `implode()` ||
| `count()` ||
| `is_array()` ||
| `shuffle()` ||
| `array_combine()` ||
| `array_count_values()` ||
| `array_flip()` ||
| `array_key_exists()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||
| `()` ||


Örnekler;

```php
<?php
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50
  ];

   echo "<pre>";

   echo "<b>print_r() İLE GÖRÜNÜŞ:</b></br></br>";
   print_r($arr);

   echo "</br><b>var_dump() İLE GÖRÜNÜŞ:</b></br></br>";
   var_dump($arr);

   echo "</pre>";
?>
```
