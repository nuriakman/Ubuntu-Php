## Yazım Kuralları (Syntax)

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
