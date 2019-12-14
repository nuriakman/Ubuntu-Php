# Fonksiyonların Kullanımı

PHP’nin kendi içinde yüzlerce fonksiyonu vardır. Örneğin; isset(), empty(), unset() gibi. Fonksiyon oluşturmak ve kullanmak gayet basit, ama basit olduğu gibi derin konuları da var.

- Fonksiyonlar ile yazdığımız kodlar daha anlaşılır ve okunabilir olur.
- Sürekli tekrarlanan aynı işlemler için bir fonksiyon yazıp kullanabiliriz.
- Değişkenler parametre atanarak çalışırlar. İstediğimiz kadar parametre atayabiliriz. Parametrelere varsayılan değer atayabiliriz. Hata almamak için varsayılan tanımlarsak iyi olur.
- Fonksiyonlarda büyük küçük harflere dikkat edilmez. Örneğin; "*Test*" ismini verdiğimiz bir fonksiyonu, "*test*" olarak çağırıp kullanabiliriz.
- Fonksiyon içerisindeki değişkenlerin dışarı ile bağlantısı yoktur, dışarıdan kontrol edilemezler. Ancak "*Global Değişken*"'ler atanabilir. içeride global değişken oluşturularak (  $GLOBALS['değişken adı'];) dışarıdan çağırabiliriz.

Fonksiyon oluşturma;

function yazıp yanına ismini yazarız. "*test*" isminde bir fonksiyon oluşturalım.

```php
  function test (1.parametre, 2. parametre ....){ kod bloğu }
```

Örnek;

```php
  function adsoyad ($ad, $soyad){
    return $ad.' '.$soyad;
  }

  echo adsoyad('Hasan', 'Çiçek'); // Parametreleri gönderiyoruz.
```

Örnek;

Örneğimizde bir fonksiyon oluşturup, soyadını parametreye atayıp, adını dışarıdan çekelim. Aynı anda hem fonksiyona, hem de dışarıdan değişken atamaya örnek vermiş olalım.

```php
  $ad="Hasan";

  function adsoyad ($soyad){
    global $ad;
    return $ad.' '.$soyad;
  }

  echo adsoyad('Çiçek'); // adsoyad değişkenin parametresine çiçek gönderiyoruz.
```

Ekran Çıktısı

```php
 Hasan Çiçek
```

Örnek;

Uzun metin kısaltma fonksiyonu yapalım.

Önce "*substr*" fonksiyonu ile gösterelim,

```php
  $metin="Lorem Ipsum Nedir? Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
  Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı
  galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak
  kullanılmıştır.";

    echo substr($metin, 0, 100)."... Devamı";
```

Şimdi, bizde bu fonksiyona benzer bir fonksiyon oluşturmaya çalışalım.

 ```php
  $metin="Lorem Ipsum Nedir? Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
  Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı
  galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak
  kullanılmıştır.";

     function kisametin($metin, $boyu=10){
       // Önce toplam karakter sayısını bulalım.
       $karaktersayisi = strlen($metin);
       // Şimdi bizim istediğimiz karakter sayısında metni gösterelim.
       if ($karaktersayisi>$boyu) {
         $metin = substr($metin, 0, $boyu).'...';
       }
       // Koşul sağlanıyorsa değer döndür.
       return $metin;
     }

     echo kisametin($metin, 100);
 ```

Ekran çıktısı;

```php
  Lorem Ipsum Nedir? Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lore...
```
