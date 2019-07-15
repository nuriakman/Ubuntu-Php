# Dizi Fonksiyonları

| Fonksiyon-Kullanımı | Açıklama |
| ----- | ----- |
| `print_r($arr);` | Dizi yada objenin okunabilir bir şekilde, insani bir şekilde yapısını gösterir. |
| `var_dump($arr);` | Dizi yada objenin okunabilir bir şekilde, programlama görünümünde yapısını gösterir.  |
| `explode(',', $arr);` | Parçala. Belirli bir karakterle bir birinden ayrılmış olan ifadeleri, parçalamamıza olanak sağlıyor. Kısaca o metinden istediğimiz yeri alabilmemize yarıyor. |
| `implode('\|', $arr);` | Birleştir. `explode();` fonksiyonunun tam tersidir. Bir diziyi istediğimiz karakterle birleştirip string ifadeye çeviriyor. |
| `count($arr);` | Bir dizinin kaç tane elemanı olduğunu bulmamızı sağlar. |
| `is_array($variable);` | Kontrol fonksiyonudur. İçerisine girdiğimiz değişkenin dizi olup olmadığını gösterir. |
| `shuffle($arr);` | Diziyi karıştırarak, her bastırdığımızda elemanların sıralamasını değiştirir. |
| `array_combine($key,$values);` | İki farklı diziyi anahtar değer olarak birleştirmek için kullanılır. |
| `array_count_values()` | Dizide tekrarlanan elemanların kaç kez tekrarlandığını bulmak için kullanılır. `array_count_values($arr);` |
| `array_flip($arr);` | Anahtarlar ile değerlerin yerini değiştirmeye yarar. |
| `array_key_exists('key',$arr);` | Dizi içerisinde belirlediğimiz anahtarın olup olmadığını kontrol eder. İç içe dizilerde kullanılamaz. İç içe için aşağıdaki örneğe balınız. |
| `array_map()` | Bir dizi içerisindeki her elemanın değerini alıp ve bir manipülasyon üzerinde oynama yaparak geri döndürür. Örneğin; Değerlerin yüzdesini almak istediğimizde, string değerlerin önüne arkasına gelen işaretleri değiştirmek istediğimizde vb.) Örnek çalışma aşağıdadır. |
| `$arr = array_filter($arr);` | Genellikle dizilerde değerleri boş olan elemanları bulmak ve kaldırmak için kullanılır. Yeni bir değişken oluşturularak yapılır.  |
| `array_merge($arr1,$arr2);` | İki diziyi birleştirmek için kullanılır. |
| `array_rand($arr);` | Dizi içerisinden rastgele anahtar getirir. |
| `array_reverse($arr);` | Dizi elemanlarını tersten yazdırır. |
| `array_reverse($wanted,$arr);` | Dizide değer aramak için kullanılır. Değer varsa anahtarını geri döndürür. 1. parametre aradığımız değer, 2. parametre dizidir.) |
| `in_array($value,$arr)` | Dizinde bir değerin olup olmadığını kontrol ederiz. Aşağıda kullanıldı. |
| `array_shift($arr);` | Dizinin ilk elemanının değerini alır, diziden çıkartır. |
| `array_pop($arr);` | Dizinin son elemanının değerini alır, diziden çıkartır. |
| `$yenidizi=array_slice($dizi,3,2);` | Dizinin belirli bir aralığını seçmek için kullanılır. 3 parametre alır. 1. parametre dizi, 2. parametre kaçıncı elemandan başlayacağı, 3. parametre kaç eleman alacağı. |
| `array_sum($arr);` | Dizinin değerlerinin toplamını bulmak için kullanılır. |
| `array_product($arr);` | Dizi elemanlarını  çarpımını bulur. |
| `array_unique($arr);` | Dizide tekrarlanan elemanları siler. |
| `array_values($arr);` | Dizideki değerleri alıp başka bir dizi oluşturmamıza yarar. Dizide benzer elemanlar olduğunda array_unique() ile benzerlerden temizlediğimizde kalan elemanların anahtarları karışık olur. İşte bu fonksiyonla temizlenmiş dizi elemanlarını başka bir diziye alır ve anahtarları tekrar oluştururuz. Kısaca anahtarları yeniden sıralamak için kullanabiliriz. |
| `array_push($arr,$new_value);` | Dizinin sonuna yeni bir eleman yada elemanlar eklemek için kullanılır. |
| `array_unshift($arr,$new_value);` | Dizinin başına yeni bir eleman yada elemanlar eklemek için kullanılır. |
| `array_keys($arr);` | Dizinin anahtarlarını listelemek için kullanılır. |
| `current($arr);` | Dizinin ilk elemanını bulmak için kullanılır. |
| `end($arr);` | Dizinin son elemanını verir. |
| `next($arr);` | Dizideki sonraki elemanı bulmak için kullanılır. |
| `prev($arr);` | Dizideki önceki elemanı bulmak için kullanılır. |
| `reset($arr);` | Dizideki ilk elemana döner. Başa döner. |
| `extract($arr);` | Dizideki anahtarları değişken gibi kullanmamızı sağlar. |
| `asort($arr);` | Dizideki değerlere göre küçükten büyüğe doğru sıralama yapar. |
| `arsort($arr);` | Dizideki değerlere göre büyükten küçüğe doğru sıralama yapar. |
| `ksort($arr);` | Dizideki anahtarlara göre küçükten büyüğe doğru sıralama yapar. |
| `krsort($arr);` | Dizideki anahtarlara göre büyükten küçüğe doğru sıralama yapar. |


**Örnek 1:**

*array_key_exists() İç İçe dizilerde Kullanımı*

*Burada kendi fonksiyonumuzu yazmamız gerekecek!*

```php
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50
  ];

  echo "<pre>";

  $arr = [
    'ad' => 'Hasan',
    'a'  => [
      'b' => [
        'c' => [
          'd' => 'e',
          'e' => 'f'
        ]
      ]
    ]
  ];
  /******** KENDİ ANAHTAR ARAMA FONKSİYONUMUZ *************/
  /*01*/  function _array_key_exists($aranan_key, $arr){
  /*02*/    foreach ($arr as $key => $value) {
  /*03*/       if ($key == $aranan_key) {
  /*04*/         return true;
  /*05*/       }
  /*06*/       if (is_array($value)) {
  /*07*/         return _array_key_exists($aranan_key, $value);
  /*08*/       }
  /*09*/     }
  /*10*/     return false;
  /*11*/   }
  /*12*/   $anahtar = 'c'; /* Değişkeni değiştirerek deneyin. */
  /*13*/   if (_array_key_exists($anahtar, $arr)) {
  /*14*/     echo "$anahtar anahtarı var.";
  /*15*/   } else {
  /*16*/     echo "$anahtar anahtarı yok.";
  /*17*/   }
  echo "</pre>";
```
**Örneğin Açıklaması (Kendi Arama Fonksiyonumuz):**

Fonksiyonumuz 1. parametreye vermiş olduğumuz anahtar değerini, 2. parametrede gönderdiğimiz dizi değişkeni içerisinde olup olmadığına bakar. Bunun için önce foreach() fonksiyonu ile her bir eleman için diziyi döndürür. 3. satırda dönen her anahtar değerini bizim aradığımız anahtar değerine eşit olup olmadığına bakar. Eğer eşitse 4. satırda 'doğru' sonucunu döndürür.

Eşit değilse, 6. satırdaki döngü çalışır. Bu döngü dizi elemanlarının da bir dizi olup olmadığına bakar. Yani aradığımız anahtar alt dizi anahtarı olabilir. Eğer altta bir dizi varsa 7. satırda aradığımız anahtarı $aranan_key değişkeni ile tekrar sorar. Anahtarı bulduğunda true döner. Bu işlemi iç içe olan bütün dizilerde yapar.

Kısaca, dizide anahtarı arar. Dizi içerisinde dizi varsa onları da arar. İç İçe diziler bittiğinde bulamamış demektir ve false döndürür. Durur.

**Örnek 2:**

```php
  echo "<pre>";  
  /* Anonim fonksiyon kullanımına da örnek var. */

  /* array_map() Kullanımı */
  $arr  = [1,2,3,4,5,6,7,8,9];
  $arr2 = array_map(function($val){return $val.' -';}, $arr);
  print_r($arr2);
  echo "</pre>";
```

**Örnek 3:**

*array_rand() Kullanımı*

```php  
  echo "<pre>";
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50,
    'okul' => 'Lisans',
    'durum' => 'aktif'
  ];

  $random = array_rand($arr, 2);
  $values = array_map(function($key) use($arr){return$arr[$key];}, $random);
  print_r($values);
  echo "</pre>";
```
