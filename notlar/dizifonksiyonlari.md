# DİZİ FONKSİYONLARI

| Fonksiyon | Açıklama |
| ----- | ----- |
| `print_r()` | Dizi yada objenin okunabilir bir şekilde, insani bir şekilde yapısını gösterir.
`<?php
  $arr = [\'ad\' => \'Hasan\', \'soyad\' => \'Çiçek\', \'yas\' => 50];
  echo \"<pre>\";
  print_r($arr);
?>` |
| `var_dump()` | Dizi yada objenin okunabilir bir şekilde, programlama görünümünde yapısını gösterir. |
| `explode()` | Parçala. Belirli bir karakterle bir birinden ayrılmış olan ifadeleri, parçalamamıza olanak sağlıyor. Kısaca o metinden istediğimiz yeri alabilmemize yarıyor. |
| `implode()` | Birleştir. explode() fonksiyonunun tam tersidir. Bir diziyi istediğimiz karakterle birleştirip string ifadeye çeviriyor. |
| `count()` | Bir dizinin kaç tane elemanı olduğunu bulmamızı sağlar. |
| `is_array()` | Kontrol fonksiyonudur. İçerisine girdiğimiz değişkenin dizi olup olmadığını gösterir. |
| `shuffle()` | Diziyi karıştırarak, her bastırdığımızda elemanların sıralamasını değiştirir. |
| `array_combine()` | İki farklı diziyi anahtar değer olarak birleştirmek için kullanılır. |
| `array_count_values()` | Dizide tekrarlanan elemanların kaç kez tekrarlandığını bulmak için kullanılır. |
| `array_flip()` | Anahtarlar ile değerlerin yerini değiştirmeye yarar. |
| `array_key_exists()` | Dizi içerisinde belirlediğimiz anahtarın olup olmadığını kontrol eder. İç içe dizilerde kullanılamaz. |
| `array_map()` | Dizideki elemanların değerini değiştirmek istediğimiz zaman kullanırız. Örneğin her elemanı 2 ile çarmak yada sonuna :) yapmak gb. |
| `array_filter()` | Genellikle dizilerde değerleri boş olan elemanları bulmak için kullanılır. |
| `array_merge()` | İki diziyi birleştirmek için kullanılır. |
| `array_rand()` | Dizi içerisinden rastgele anahtar getirir. |
| `array_reverse()` | Dizi elemanlarını tersten yazdırır. |
| `array_search()` | Dizide değer aramak için kullanılır. Değer varsa anahtarını geri döndürür.(Birinci parametre aradığımız değer, ikinci parametre dizidir.) |
| `in_array()` | Dizinde bir değerin olup ulmadığını kontrol ederiz. |
| `array_shift()` | Dizinin ilk elemanının değerini alır. |
| `array_pop()` | Dizinin son elemanının değerini alır. |
| `array_slice()` | Dizinin belirli bir aralığını seçmek için kullanılır. Örneğin; `$yenidizi=array_slice($dizi, 3, 2);` Dizinin üçüncü elemanından başla, iki elemanını al. Yani; dört ve beşinci elemanını alır. Sadece üçü yazsaydık; üçüncüden sonrakileri verirdi. Sadece -2 dersek; son iki elemanı gösterir. |
| `array_sum()` | Dizinin değerlerinin toplamını bulmak için kullanılır. |
| `array_product()` | Dizi elemanlarını  çarpımını bulur. |
| `array_unique()` | Dizide tekrarlana elemanları siler. |
| `array_values()` | Dizideki değerleri alıp başka bir dizi oluşturmamıza yarar. Dizide benzer elemanlar olduğunda array_unique() ile benzerlerden temizlediğimizde kalan elemanların anahtarları karışık olur. İşte bu fonksiyonla temizlenmiş dizi elemanlarını başka bir diziye alır ve anahtarları tekrar oluştururuz. |
| `array_push()` | Dizinin sonuna yeni bir eleman yada elemanlar eklemek için kullanılır. |
| `array_unshift()` | Dizinin başına yeni bir eleman yada elemanlar eklemek için kullanılır. |
| `array_keys()` | Dizinin anahtarlarını listelemek için kullanılır. |
| `current()` | Dizinin ilk elemanını bulmak için kullanılır. |
| `end()` | Dizinin son elemanını verir. |
| `next()` | Dizideki sonraki elemanı bulmak için kullanılır. |
| `prev()` | Dizideki önceki elemanı bulmak için kullanılır. |
| `reset()` | Dizideki ilk elemana döner. Başa döner. |
| `extract()` | Dizideki anahtarları değişken gibi kullanmamızı sağlar. |
| `asort()` | Dizideki değerlere göre küçükten büyüğe doğru sıralama yapar. |
| `arsort()` | Dizideki değerlere göre büyükten küçüğe doğru sıralama yapar. |
| `ksort()` | Dizideki anahtarlara göre küçükten büyüğe doğru sıralama yapar. |
| `krsort()` | Dizideki anahtarlara göre büyükten küçüğe doğru sıralama yapar. |


**Örnekler 1.:**

```php
<?php
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50
  ];

  echo "<pre>";
  /* print_r Kullanımı */
  // print_r($arr);
  /* var_dump() Kullanımı */
  // var_dump($arr);
  /* explode() Kullanımı */
  $test = "Hasan, Nuri, Ahmet, Leyla, Kemal, Nalan";
  $arr = explode(',', $test); /* Virgüle göre parçalasın! */
  // print_r($arr);
  /* implode() Kullanımı */
  $string = implode('|', $arr); /* Örnek için yukarıdaki $arr'yi aldık. Aralarına | koyduk. */
  //echo $string;
  /* count() Kullanımı */
  // echo count($arr); /* Yukarıdaki $arr'yi aldık. */
  /* is_array() Kullanımı
  if (is_array($string)){
    echo "Bu bir dizidir.";
  } else {
    echo "Bu bir dizi değildir.";
  }  // Burayı çalıştırmak için sondakileri açıklama satırına alın. */
  /* shuffle() Kullanımı */
  $dizi = [1,2,3,4,5,6,7,8,9,10];
  shuffle($dizi);
  // print_r($dizi);
  /* array_combine() Kullanımı */
  $key = ['ad', 'soyad'];
  $values = ['Hasan', 'Çiçek'];
  $arr = array_combine($key, $values);
  // print_r($arr);
  /* array_count_values() Kullanımı */
  $arr = [Hamit, Ahmet, Samet, Aynur, Nuri, Hamit, Nuri, Samet, Nuri];
  $arr2 = array_count_values($arr);
  // print_r($arr2);
  /* array_flip() Kullanımı */
  $arr = [
    'ad' => 'Hasan', // Bu anahtarın var olup olmadığını kontrol edeceğiz.
    'soyad' => 'Çiçek',
    'yas' => 50
  ];
  $arr2 = array_flip($arr);
  // print_r($arr2);
  /* array_key_exists() Kullanımı
  if (array_key_exists('ad', $arr)) {
    echo 'ad anahtarı var.';
  } else {
    echo 'ad anahtarı yok.';
  } */
  /* array_key_exists() İç İçe dizilerde Kullanımı */
  /* Burada kendi fonksiyonumuzu yazmamız gerekecek! */
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
?>
```
**Kendi Arama Fonksiyonumuz:**

Fonksiyonumuz 1. parametreye vermiş olduğumuz anahtar değerini, 2. parametrede gönderdiğimiz dizi değişkeni içerisinde olup olmadığına bakar. Bunun için önce foreach() fonksiyonu ile her bir eleman için diziyi döndürür. 3. satırda dönen her anahtar değerini bizim aradığımız anahtar değerine eşit olup olmadığına bakar. Eğer eşitse 4. satırda 'doğru' sonucunu döndürür.

Eşit değilse, 6. satırdaki döngü çalışır. Bu döngü dizi elemanlarının da bir dizi olup olmadığına bakar. Yani aradığımız anahtar alt dizi anahtarı olabilir. Eğer altta bir dizi varsa 7. satırda aradığımız anahtarı $aranan_key değişkeni ile tekrar sorar. Anahtarı bulduğunda true döner. Bu işlemi iç içe olan bütün dizilerde yapar.

Kısaca, dizide anahtarı arar. Dizi içerisinde dizi varsa onları da arar. İç İçe diziler bittiğinde bulamamış demektir ve false döndürür. Durur.

**Örnekler 2.:**

```php
<?php
  echo "<pre>";

  /* array_map() Kullanımı */
  function filtrele($val){
    return $val."-)";
  }

  $arr  = [1,2,3,4,5,6,7,8,9];
  $arr2 = array_map('filtrele', $arr);
  // print_r($arr2);

  /* array_filter() Kullanımı */
  $arr = ['', 'Hasan', 'Nuri', ''];
  //print_r($arr); // Hepsi görünür.
  $arr = array_filter($arr);
  //print_r($arr); // Boş olanlar görünmez.

  /* array_merge() Kullanımı */
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];
  $arr  = array_merge($arr1, $arr2);
  //print_r($arr);

  /* array_rand() Kullanımı */
  $arr = [
    'ad' => 'Hasan',
    'soyad' => 'Çiçek',
    'yas' => 50,
    'okul' => 'Lisans',
    'durum' => 'aktif'
  ];

  $random = array_rand($arr, 2);
  $values = array_map(function($key) use($arr){ // Anonim fonksiyon.
    return$arr[$key];
  }, $random);
  print_r($values);

  echo "</pre>";
?>



```
