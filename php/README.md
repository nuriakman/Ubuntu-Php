# PHP İLE WEB PROGRAMLAMAYA GİRİŞ LYK EĞİTİM NOTLARI

## BAŞLAMADAN ÖNCE

**PHP Nedir?**

PHP (PHP: Hypertext Preprocessor) derlemeye gerek duyulmadan, geliştirme için tasarlanmış HTML içine gömülebilen bir betik dilidir.  

Php, "Ben kendime kişisel bir web sayfası yapsam nasıl olur." diye düşünüp kendi web sayfasını yaparken *Rasmus Lerdorf*  tarafından geliştirilmiştir.  

Php'nin ilk adı "*Personel hompage (Kişisel Anasayfa)*" dir. 1994 yılında denemeler yaptıktan sonra 1995 yılında php'nin ilk versiyonu çıkıyor. 8 Haziran 1995 yılında Rasmus Lerdorf "*Open Searce (Açık Kaynak)*" geliştirilmek üzere bir tartışma grubunda "*Personel Homepage Tools*" ismiyle duyurarak, gruba "*Ben bunu yaptım, alın geliştirin*" demiş.

Daha sonra; iki israilli programcı "*Zeev Suraski*" ve "*Andi Gutmans*" (*Zend teknolojilerinin kurucuları*) php'yi alıp zend çekirdeği ile yeniden yazıyorlar. Adınıda şimdiki **PHP (Hypertext Preprocessor)** olarak koymuşlardır.

**Tercih Edilme Sebepleri;**

- Nesne yönelimli bir dildir,
- HTML kodları arasına kolayca gömülebilir,
- Derlemeye gerek yoktur, direk yapılan görülebilir,
- Sunucu masrafları uygundur,
- Kolay öğrenilebilir ve bu sebeple kolay para kazanabilirsiniz.

*İpucu: Php'nin resmi sitesi [php.net](https://www.php.net/)'dir.*

**Doğru Editör Seçimi (IDE)**

Başka editörler kullanırken PHP kodları için eklenti yüklemek gerekebilir ve gerekecektir. Eğer kullandığınız dile ait bir IDE varsa onu kullanmamız gerekir. Örneğin; Php için "*Phpstorm*" kullanmak gibi. Fakat biz sizlere [Atom](https://atom.io/) yada [SublimeText](https://www.sublimetext.com/) kullanmanızı öneriyoruz. Çünkü, kullanmanız için herhangi bir ücret ödemeniz gerekmiyor.

## PHP'YE GİRİŞ

### PHP'ye Başlangıç

**Yazım Kuralları (Syntax)**  
Php dosya uzantıları dosyaismi.php şeklinde, yani .php olur. Sunucular ilk önce index isimli dosyayı okur. Bu nedenle ilk sayfamızın adı index.php olmalıdır.

- İçerisinde kod olmayan her hangi bi şeyler yazdığımız sayfalar tarayıcıda olduğu gibi düz metin olarak gösterilir.
- Php etiketleri arasında yazdıklarımız php kodu olarak yorumlanır.

Php etiketleri demişken; php'de **açılış** etiketi ` <?php ` **kapanış** etiketi ise ` ?> ` şeklindedir.

*Örnek index.php*;
```php
<?php
   echo "Linux Yaz Kampı 2017";
?>
```
Bu iki etiket arasına yazılan kodlar, php kodu olarak yorumlanır. Php etiketleri içerisine rastgele yazı yazamayız `hata verir`. Mutlaka `php kodu` olması gerekir. Çünkü biz bu etiketleri yazmakla burada php kodu yazacağımızı ifade etmiş oluyoruz. Tarayıcılar da bu etiketleri gördüğünde içeriğini php kodu olarak yorumlar.

Ekrana yazdırma komutu `echo` yada `print` dır ve her komut satırı `;` ile kapatılmalıdır. Metni `tek tırnak` yada `çift tırnak` içerisinde yazmamız gerekir. Sayılarıda tırnaksız yazabiliriz.
```php
<?php
    // İki satır kodda aynı çıktıyı verir.
    echo "Linux Yaz Kampı 2017";
    print "Linux Yaz Kampı 2017";
?>
```
Ekran çıktısı;
```
Linux Yaz Kampı 2017
Linux Yaz Kampı 2017
```

**Açıklama Satırları**
Açıklama satırları ekranda tarayıcıda görünmez. Kod yazan için hatırlatıcı notlar içerir. Aşağıda örnekleri görebilirsiniz.

```php
<?php
    // Tek satırlık açıklama satırı.
    #  Tek satırlık açıklama satırı.
    /*
     Çok satırlı açıklama satırı. Çok satırlı açıklama satırı. Çok satırlı açıklama satırı.
     Çok satırlı açıklama satırı. Çok satırlı açıklama satırı. Çok satırlı açıklama satırı.
     Çok satırlı açıklama satırı. Çok satırlı açıklama satırı. Çok satırlı açıklama satırı.
    */
?>
```

### PHP'de Değişkenlerin Kullanımı

Değişkenlerin özellikleri;
- `$` simgesi ile tanımlanırlar,
- `Harf` veya `_` simgesi ile başlarlar,
- Sayı ile başlamazlar,
- Türkçe karekter içerebilir, fakat tercih etmeyiz,
- Büyük-küçük harfe duyarlıdırlar (case-sensitive).

Değişken örnekleri;
```php
<?php
    $birinci = "Linux ";
    $_ikinci = "Yaz ";
    $üçüncÜ = "Kampı";
    $dördüncü = 2017;

    echo $birinci.$_ikinci.$üçüncÜ." ".$dördüncü;
?>
```

Not: Burada `=` atama operatörüdür.

Ekran çıktısı;
```sh
    Linux Yaz Kampı 2017
```

İpucu: Aynı isimde değişken oluşturulduğunda, son oluşturulan (alt satırdaki) değişkenin değeri geçerlidir.

### PHP'de Veri Türleri (Date Types)

- **Strings :** Metinler ( Php ile Web Programlama )
- **Integer :** Tam sayılar( 500, 200 vb. )
- **Float(double) :**  Ondalık sayıları ifade eder. ( 5.5, 2.3 vb. )
- **Boolean :** Doğru, yanlış (True-False)
- **Array :** Diziler ( Sınıftaki öğrencilerin isimleri vb. )
- **Object :** Nesneler ( $object= new stdClass; vb. )
- **NULL :**  Yok, boş değil.

Peki veri tipini nasıl tespit ederiz. Bunun için `gettype();`fonksiyonunu kullanırız. Fonksiyonun ne olduğundan ileride bahsedeceğiz.

Örnekler;
```php
<?php
    $meyve = "elma";
    $adet = 15;
    $yarimkilo = 0.5;
    $tatlimi = true;
    $meyveler = array(elma, armut, muz, ayva);
    $varmi = NULL;


    echo "\$meyve"." değişkeninin türü ="." ".gettype($meyve)."<br>";
    echo "\$adet"." değişkeninin türü ="." ".gettype($adet)."<br>";
    echo "\$yarimkilo"." değişkeninin türü ="." ".gettype($yarimkilo)."<br>";
    echo "\$tatlimi"." değişkeninin türü ="." ".gettype($tatlimi)."<br>";
    echo "\$meyveler"." değişkeninin türü ="." ".gettype($meyveler)."<br>";
    echo "\$varmi"." değişkeninin türü ="." ".gettype($varmi)."<br>";

    class kediler
    {
        function birŞeySöyle()
        {
            echo "Miyav.";
        }
    }

    $kedi = new kediler;

    // Değişken türü true-false döner.
    echo '$kedi'." değişkeninin türü ="." ".is_object($kedi)."<br>";
?>
```
Ekran Görüntüsü,
```sh
  $meyve değişkeninin türü = string
  $adet değişkeninin türü = integer
  $yarimkilo değişkeninin türü = double
  $tatlimi değişkeninin türü = boolean
  $meyveler değişkeninin türü = array
  $varmi değişkeninin türü = NULL
  $kedi değişkeninin türü = 1
```

### PHP'de Sabit Değişkenler

Sabit değişkenler de değişkenlerle aynı kurallara sahiptirler. Sadece veri türü olarak "*object*" veri türünü taşıyamazlar.  

Kullanımı;
```php
  <?php
    define("sabitdegiskenadi","degeri");
  ?>
```
İpucu: Sabit değişkenlerin değeri değiştirilemez. Bir kere oluşturulurken verilir!

### PHP'de Sihirli Karakterler

Sihirli karekterler sadece `String` ifadelerde ve `çift tırnak` içerisinde kullanılabilir.

| Sihir | Açıklama |
|----|----|
| \t | Tab karakteri, bir tab atar. |
| \n | Enter karakteri, bir alt satıra indirir. |
| \\\ | Kullanmak istediğimiz karakterin önüne konur. |
| \\$ | Değişkenin adının olduğu gibi göstermesi için kullanılır. |
| \\' | Tırnak içerisinde tırnak kullanma istersek kullanılır. |
| \\" | Fazladan çift tırnak kullanmak için kullanılır.|

## PHP'DE OPERATÖRLER
### Aritmatik Operatörler
