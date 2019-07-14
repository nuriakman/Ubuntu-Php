# DİZİ FONKSİYONLARI

| Fonksiyon | Açıklama |
| ----- | ----- |
| `print_r()` | Dizi yada objenin okunabilir bir şekilde, insani bir şekilde yapısını gösterir. |
| `var_dump()` | Dizi yada objenin okunabilir bir şekilde, programlama görünümünde yapısını gösterir. |
| `explode()` | Parçala. Belirli bir karakterle bir birinden ayrılmış olan ifadeleri, parçalamamıza olanak sağlıyor. Kısaca o metinden istediğimiz yeri alabilmemize yarıyor. |
| `implode()` | Birleştir. explode() fonksiyonunun tam tersidir. Bir diziyi istediğimiz karakterle birleştirip string ifadeye çeviriyor. |
| `count()` | Bir dizinin kaç tane elemanı olduğunu bulmamızı sağlar. |
| `is_array()` | Kontrol fonksiyonudur. İçerisine girdiğimiz değişkenin dizi olup olmadığını gösterir. |
| `shuffle()` | Diziyi karıştırarak, her bastırdığımızda farklı olarak görünmesini sağlar. |
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


Örnekler; tetst.php adında bir sayfa oluşturup aşağıdaki kodu deneyebilir yada altta ekran çıktısından bakabilirsiniz.

```php
<?php
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50
  ];

   echo "<pre>";

   // print_r Kullanımı
   echo "<b>print_r() Çıktısı:</b></br></br>";
   print_r($arr);

   // var_dump() Kullanımı
   echo "</br><b>var_dump() Çıktısı:</b></br></br>";
   var_dump($arr);

   // explode() Kullanımı
   echo "</br><b>explode() Çıktısı:</b></br></br>";
   $test = "Hasan, Nuri, Ahmet, Leyla, Kemal, Nalan";
   $arr = explode(',', $test);
   print_r($arr);

   // implode() Kullanımı
   echo "</br><b>implode() Çıktısı:</b></br></br>";
   $string = implode('|', $arr); // Örnek için yukarıdaki $arr'yi aldık. Aralarına | koyduk.
   echo $string;
   echo "</b></br></br>"; // Üç satır boşluk.

   // count() Kullanımı
   echo "</br><b>count() Çıktısı:</b></br></br>";
   echo count($arr); // Yukarıdaki $arr'yi aldık.
   echo "</b></br></br>"; // Üç satır boşluk.

   // is_array() Kullanımı
   echo "</br><b>is_array() Çıktısı:</b></br></br>";

   if (is_array($string)){
     echo "Bu bir dizidir.";
   } else {
     echo "Bu bir dizi değildir.";
   }

   echo "</pre>";
?>
```
