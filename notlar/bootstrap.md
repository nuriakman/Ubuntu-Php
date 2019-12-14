# BOOTSTRAP


## Bootstrap için gerekli dosyaları

- [Bootstrap-Css-Js](https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip)
- [JQuery](https://code.jquery.com/jquery-3.4.1.min.js)
- [Popper](https://unpkg.com/popper.js)

Dosyaları indirdikten sonra dizin yapısı aşağıdaki gibi olmalıdır, aşağıdaki dizin yapısı dışındaki dosyaları silebilirsiniz.

```sh
  Proje Adı/
      ├── css
      │   └── bootstrap.min.css
      ├── js
          ├── bootstrap.min.js
          ├── jquery-3.4.1.min.js
          └── popper.min.js
```

## İNCELİKLER

Türkçe karekterlerin düzgün çıkmasını sağlar.

```html  
  <meta charset="utf-8">
```

- width=device-width : Web sayfasının genişliğini bağlanılan cihazın ekran genişliğine göre eşitler.
- initial-scale=1 : Web sayfası yüklendiğinde, ilk yakınlaştırma seviyesini 1 olarak ayarlar.
- shrink-to-fit=no : Web sayfasının ekrana sığması için küçültme yapılmasını önler.

```html
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
```

Java script kodları body kapatma etiketinin hemen üzerinde  ve sıralaması aşağıdaki gibi olmalıdır.

```html
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
```


## BOOTSTRAP SINIFLARI VE ETİKETLERİ

**Kırılım Noktaları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| xs | Çözünürlüğü 576px'den küçük cihazlar. |
| sm | Çözünürlüğü 576px ile 768px dahil arasında olan cihazlar (Cep telefonları vb.). |
| md | Çözünürlüğü 768px ile 992px dahil arasında olan cihazlar (Tablet vb.). |
| lg | Çözünürlüğü 992px ile 1200px dahil arasında olan cihazlar (Notebook vb.). |
| xl | Çözünürlüğü 1200px den büyük cihazlar (Televizyon, Dizüstü vb.). |

**Temel Sınıflar**

| Sınıf.............................. | Açıklama |
| ---- | -------- |
| container | Ana kapsayıcı. Satınların tam olarak yerleşmesi için kesinlikle ihtiyaç vardır. Kenarlardan 15px boşluk bırakır. |
| container-fluid | Ana kapsayıcı. Sağdan ve soldan boşluk bırakmadan tamamen ekranı kaplar. |
| row | Satırları ifade eder. Sütunlar sadece satırlar içerisinde olmalıdır. Aksi halde sayfada dağılmalar olur. Katmanlar arasında 15px boşluk kalır. |
| col | Sütun sınıfını temsil eder. Bir satırda en fazla 12 sütun olur. 12 den fazla olursa alta geçer. |
| offset-sm-1 | Sütunu 1 ileriden başlatır. 1 ile 11 e kadar değerlerde özelleştirilebilir. |

**Hizalama Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| align-items-start | Kolonları dikey üste hizalama. |
| align-items-center | Kolonları dikey ortaya hizalama. |
| align-items-end | Kolonları dikey alta hizalama. |
| justify-content-start | Kolonları yatay sola hizalama. |
| justify-content-center | Kolonları yatay ortaya hizalama. |
| justify-content-end | Kolonları yatay sağa hizalama. |
| justify-content-around | Kolonları yatay eşit dağıtır. |
| justify-content-between | Kolonlara yatay eşit aralık verir. |

**Sıralama Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
|order-1| Sıralama küçükten büyüğe doğru sıralar (1,2,3,4,5,6,7,8,9,10,11,12).|
|order-first| Birinci sırada gösterir.|
|order-last| Son sırada gösterir.|
|order-sm-1| sm kırılma noktasına gelince 1. sırada gösterir. "sm" yerine diğer kırılma noktaları, "1" yerine first ve last kullanılabilir.|

**Metin Hizalama Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| text-justify | Metinleri iki yana yaslar. |
| text-left | Metni istediğiniz yöne yaslar (left, center, right). |
| text-sm-left | Kırılım noktalarına göre de sola yaslıyabiliriz. |
| text-md-center | Kırılım noktalarına göre de ortalayabiliriz. |
| text-xl-right | Kırılım noktalarına göre de sağa yaslıyabiliriz. |

**Renk Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| bg-primary | Arka plana renk verir (primary, secondary, success, danger, warning, info, light, dark, white). |
| bg-transparent | Arka plana rengini transparan yapar. |
| text-primary | Metine rengi verir. Yukarıdaki renkler geçerlidir. |
| text-muted | Metin rengini soluklaştırır. Slogan gibi ikincil bir yapıda kullanabiliriz. |

**Kenarlık Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| border | Dört yöne de kenarlık ekler. |
| border-top | İstediğiniz yöne kenarlık ekler (top, right, botton, left). |
| border-0 | Kenarlıkları kaldırır. |
| border-primary | Kenarlığa tanımlı bütün renkleri verebilirsiniz. |
| rounded | Köşeleri yuvarlıyarak kenarlık verir. |
| rounded-top | İstediğiniz yönü yuvarlıyarak kenarlık verir (top, right, botton, left). |
| rounded-circle | Yuvarlak yapar. |
| rounded-0 | Yönlerdeki yuvarlıkları kaldırır. |

**Dış ve İç Boşluk Sınıfları** (margin-padding)

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| m-5 | 3 rem dış boşluk verir (0, 1, 2, 3, 4, 5, auto). Auto değeri sadece margin için kullanılır. |
| mt-5 | Yukarıdan 3 rem boşluk verir (mt:yukarıdan, mb:aşağıdan, ml:soldan, mr:sağdan, mx: sol ve sağdan, my:aşağı ve yukarıdan boşluk atar). |
| m-sm-2 | Kırılma noktalarına göre de boşluk verebilirsiniz. |
| ml-sm-2 | Hem yön hemde kırılma noktalarına göre boşluk verme. |

**Yan Yana Getirme (Float-Clearfix) Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| float-left | Elemanları sola yaslar. |
| float-right |Elemanları sağa yaslar. |
| float-none | Serbest. |
| float-sm-left | Kırılma noktalarına göre de float verebiliriz. |
| clearfix | Float atadığımız elemenleri bir diz içerisine alarak, float değerlerini temizleriz. Böylece float vermediğimiz elementler aralara karışmaz. |

 **Görüntüleme Sınıfları (Display)**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| d-[özellik | Görüntüleme. |
| d-[kırılma noktası]-[özellik] | Kırılma noktasına göre görüntüleme. |
| d-print-[özellik] | Yazıcıda görüntüleme. |
| invisible | Elementi gizler ama sayfadaki yerini hala korur. |
| visible | invisible ile gizlediğimiz elementin içerisindeki her hangi bir yeri göstermemizi sağlar. |


Özellik yerine aşağıdakilerden size uygun olanı yazılacak!

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| none | Elementin ekranda görüntülenmemesini sağlar. |
| inline | Elementi "span" gibi satır içi elementi olarak görüntülenmesini sağlar. Yükseklik ve genişlik değerinin bir etkisi olmaz. |
| inline-block | İnline ile aynıdır, fakat yükseklik ve genişlik değerleri uygulanabilir. |
| block | Uygulandığı elementi `<h1>` etiketi gibi blok element olarak görüntülenmesini sağlar. Uygulanan element yeni satırdan başlar ve bulunduğu alanın tün genişliğini kaplar. |
| table | Uygulandığı elementin tablo etiketi gibi davranmasını sağlar. |
| table-cell | Uygulandığı elementin "td" etiketi gibi davranmasını sağlar. |
|table-row | Uygulandığı elementin "tr" etiketi gibi davranmasını sağlar. |
| flex | Uygulandığı elementin bir flex container olarak görüntülenmesini sağlar. |
| inline-flex | Uygulandığı elementin satır içi seviyesinde bir flex container olarak görüntülenmesini sağlar. |



**Boyutlandırma Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| w-25 | Bir elemente %25, %50, %75, %100 genişlik vermek için kullanılır.
| h-25 | Bir elemente %25, %50, %75, %100 yükseklik vermek için kullanılır.
| mw-100 | İçerisinde bulunduğu elementin genişliğini aşmışsa dış elementin genişliğine uydurmak.
| mh-100 | İçerisinde bulunduğu elementin yüksekliğini aşmışsa dış elementin genişliğine uydurmak.

**Dikey hizalama Sınıfları**

Bu sınıf sadece inline, inline-block, inline-table ve table-cell elementlerinde çalışır.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| aling-basaline | Elementi ana çizgisine hizalar.
| aling-top | Satırdaki en uzun öğerin üst kısmı ile hizalanır.
| aling-bottom | Satırdaki en kısa öğe ile hizalanır.
| aling-middle | Element ortaya hizalanır.
| aling-text-top | Ana elementinin fontunun üst kısmı ile hizalanır.
| aling-text-bottom | Ana elementinin fontunun alt kısmı ile hizalanır.

**Position Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| position-static | |
| position-relative | |
| position-absulute | |
| position-fixed | |
| position-sticky | |
| sticky-top | Elementi sayfanın üst kısmına konumlandırır. Fakat bu işlemi kaydırma çubuğu kendisini geçtiği anda yapmaya başlar. |
| fixed-top | Elementi her zaman sayfanın en üstünde konumlandırır. |
| fixed-bottom | Elementi sayfanın en altına konumlandırır. |

**Metni Arka Plan Resmi İle Değiştirme**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| text-hide | h1 etiketine bu sınıfı verdikten sonra, `background-image` özelliğine istediğimiz resmin adresini verip, genişlik ve yüksekliğini ayarlıyoruz. Böylece ekranda resim görülüyor fakat arama motorları `<h1>` etiketinde yazdığımız metne görür. |

***Kapatma İkonu***

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| close | Buton sınıfına bu özelliği verdikten sonra, etiket arasına `&times;` kapatma işareti konularak yapılır. |

***Ekran Okuyucu Optimizasyonu***

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| sr-only | Elementi ekran okuyucular dışındaki tüm cihazlarda gizler. Sayfa tasarımına bir etki etmez. Web sayfanızın erişilebilir özelliğini arttırır. Ekran okuyucularına şu an hangi sayfada oldukları hakkında bilgi vermiş olur. Örneğin görme engelli bir kişiye hata mesajı vermek içinde kullanılabilir. Uyarı mesajları `<span>` etiketi içerisinde verilebilir. |
| sr-only-focusable | Bağlantının normal kullanıcılarında görmesini sağlar. |
| aria-label | Uyarı mesajının kapatma işaretinin ekran okuyucuları için bir şey ifade etmesini sağlar. |
| aria-hidden | Ekran okuyucuların elementi görmemesini sağlayabiliriz. |

**Başlık Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| display-1 | Başlık stilidir (1, 2, 3, 4). Daha büyük boyutlarda ve dikkat çekici yazı stili kullanılır. |

**Öne Çıkan Metin Sınıfı**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| lead | Yazı stilini değiştirip daha belirgin yapar. |


**Satır İçi Metin Etiketleri**

Her etiket görünümüne göre değil, kullanma amacına göre kullanılmalıdır. Çünkü; tarayıcılar etikete göre yorumlar.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| \<mark\> | Gerekli kelimeleri belirginleştirmenize yarar. Renklendirir. |
| \<del\> | Silindiğini göstermek istediğiniz kelime yada metinlerde kullanılır. Yazının üzerine çizgi çeker. |
| \<s\> | Artık doğru, net ve ilgili olmayan metni işaret etmek için kullanılır. Bu da yazının üzerine çizgi çeker. |
| \<ins\> | Belgeye sonradan eklenmiş metni tanımlar. Metnin altını çizer. |
| \<u\> | Metnin altını çizmek için kullanılır. |
| \<small\> | Gerekli kelimeleri belirginleştirmenize yarar. Normaldan daha küçük yazar. |
| \<strong\> | Önemli metni tanımlamak içim kullanılır. Metni kalın yapar. |
| \<em\> | Vurgulanmış kelimeler için kullanılır. Metin `italik` görünür. |
| \<abbr\> | Kısaltmalı bir sözcüğü ifade eder. Etiket içerisinde `title` ile kısaltmanın açılımı yazılır. |

**Kod Etiketleri**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| \<code\> | Satır içerisinde kod tanımlamak için kullanılır. |
| \<pre\> | Çok satırlı bir kod kullanacaksak `<code>` etiketini içerisinde kullanırız.|
| \<var\> | Değişkenleri belirtmek için kullanılır. |
| \<kdb\> | Klavye girdileri (Kısayolları) için kullanılır.|
| \<samp\> | Örnek bir proğram çıktısı için kullanılır.|

**Alıntı Yapma Etiketi (blockquote) ve Sınıfları**

Ana kapsayıcı olarak kullanılıp. Ana metin için aşağıdaki birinci sıradaki sınıf kullanılır. Etiketi hizalamak için metin hizalama sınıflarını kullanabiliriz. `blockquote` ve `blockquote-footer` iki sınıfı vardır.

Örneğin;

```html
  <blockquote class="blockquote text-right">
    <p>Metin</p>
    <footer class="blockquote-footer">Alıntı sahibi<footer>
  </blockquote>
```

**Yazı Kalınlığı ve İtalik Yazı Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| font-weight-bold | Kalın yazmak için kullanılır. |
| font-weight-normal | Kalın yazı içerisindeki kelime yada metni normal göstermek için kullanılır. |
| font-weight-light | İnce yazmak için kullanılır. |
| font-italic | Metni italik göstermek için kullanılır. |

**Metin Dönüştürme Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| text-lovercase | metni küçük harflere dönüştürür. |
| text-uppercase | METNİ BÜYÜK HARFE DÖNÜŞTÜRÜR. |
| text-capitilaze | Her Sözcüğü Büyük Harfe Dönüştürür. |

**Metin Kaydırma ve Kesme Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| novrap | Metinleri aynı satırda yazdırır. Aşağı kaydırmaz. |
| truncate | Metni `<div>` genişliğine ulaştığında keser ve üç nokta koyar. |

**Listeleme Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| list-unstyled | Varsayılan listelemeleri kaldırır. İçerideki listelere etki etmez. Eğer içerideki listelemeyide kaldırmak istiyorsanız, orayada uygulamanız gerekmektedir.|
| list-inline | `<ul>` etiketlerini verilir ve alttaki elemanları yan yana listelememizi sağlar. Bunun için alt elementlere yani `<li>` elemanlarına da `list-inline-item` sınıfı verilir. Bu özelliği menü yapmada kullanabiliriz. |

**Tanım Listesi Sınıfları**

Tanım listesi, terimlerin açıklamalarıyla birlikte listelendiği listeleme türüdür.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| dl | Terimler tanım listesi başlangıç etiketi. Ana kapsayıcısıdır. |
| dt | Her bir terim için açılır. |
| dd | Her bir terim açıklaması için açılır. |

Terim listesi varsayılan olarak alt alta listelenir. `dl` elementi sınıfına `row`, `dt` etiketine `col-3` sınıfı ve `dd` etiketine `col-9` uygulayarak sütunlar halinde de gösterebilirsiniz.

**Resimler Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| img-fluid | Resmin ekran boyutuna duyarlı olmasını sağlar. Resmin max genişliğini %100, yüksekliğinide auto yapar. Bu sayede resmin boyutu orantılı (responsive) olur.|
| img-thumbnail | Uygulandığı resmin çerçeveli bir şekilde görüntülenmesini sağlar. |

Bir resime birden fazla kaynak belirteceğimizde ya da farklı ekran boyutlarına göre farklı resimler göstereceğimizde `<picture>` elementini kullanırız. Resimlere bootstrap özellikleri uygulayacaksak `<picture>` elementi içerisindeki `<img>` elementi sınıfına `img-fluid`, `img-thumbnail` gibi elementler kullanabiliriz. Resimleri hizalamak için ise `float`, `margin` ve metin hizalama sınıflarını kullanabiliriz. Metin hizalama sınıfları kullanılırken resim bir `<div>` içerisine alınması gerekir. `<div>`'e `text-right`, `text-left` ve `text-center` verilebilir.

**Figür Etiketi ve Sınıfı**

Figürler içerisinde resimlere varsayılan olarak bir boyutlandırma yapılmamaktadır. Bu nedenle resimlere `img-fluid` sınıfı vererek duyarlı resimler oluşturabilir ve taşmaların önüne geçebilirsiniz.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| \<figure\> | Resimleri `inline-block` olarak görüntülenmesinde kullanılmaktadır. Bu etikete `figure` sınıfı eklenir. |
| figure-img | `<figure` elementinin içerisindeki `<img>` etiketlerine sınıf olarak verilir. Bu sınıf resmin `margin` ve `bottom` özelliğini 0.5 rem yapar ve satır aralığını 1'e eşitler. |
| figure-caption | `<figcaption>` resim yazısı etiketine sınıf olarak uygulayarak yazıya stil verebilirsiniz. Bu sınıf yazının `font-size`'ın %90' yapar ve yazı rengini değiştirir. Yazıyı hizalamak için se metin hizalama sınıflarından kullanılabilir.|

**Embed**

Embed sınıfı `<iframe>`, `<embed>`, `<video>` ve `<object>` elementlerine uygulanır. Aşağıdaki örnekte `emmed` sınıfı `<iframe>` elementi üzerinden gösterilmiştir. Kullanabileceğimiz en-boy oranları, 1'e1, 4'e3, 16'ya9 ve 21'e9 dur. Biz örneğimizde 16'ya9 kullandık.

Örneğin;

```html
  <div class="emmed-responsive emmed-responsive-19by6">
    <iframe class="emmed-responsive-item">
      src="https://www.youtube.com/watch?v=lc9JEHLlqdU">
    </iframe
  </div>
```
**Buton Sınıfları**

Bootstrapta butonlara stil vermek için `btn` sınıfını kullanıyoruz. `btn` sınıfıyla birlikte elementimize, tanımlanmış olan tüm temel buton özellikleri uygulanır. Buton sınıfları `<input>` elementinde `type="input"` `type="submit">` ve `type="reset"` ile birlikte kullanabiliriz.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| btn-renk | Varsayılan buton rengi beyazdır. `btn-` ön eki ile birlikte tüm bootstrap renk sınıflarını kullanabiliriz. |
| btn-link | Link görünümü vermek için kullanılır. |
| btn-outline-renk | Buton görünümünü tersine çevirir. Kenarlık ve üzerine gelince değişen rengini vermiş oluruz. |
| btn-small | Butonu küçük yapar. |
| btn-large | Butonu büyük yapar. |
| btn-block | Butonun display özelliğini blok, genişliğini ise %100 yapar. |

**Buton Grupları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| btn-group | Butonları bir `<div>` içerisine alarak `<div>`'e bu sınıfı uyguluyoruz. |
| btn-toolbar | Butonlardan oluşan bir araç çubuğu oluşturabiliriz. |
| btn-group-sm | Küçük buton grubu yapar. |
| btn-group-lg | Büyük buton grubu yapar. |
| btn-group | Butun grubunu dikey olarak görüntüler. |

**Dropdown Bileşeni**

Öncelikle bir buton oluşturuyoruz ve butona `dropdown-toggle` uygulayarak **dropdown** görünümünü veriyoruz. Butona tıklandığında menünün açılması için arka planda bir *javascript fonksiyonu* çalışmaktadır. Bu fonksiyonu kullanabilmek için butonun `data-toggle` özelliğini *dropdown* olarak veriyoruz.

Menüyü oluşturmak için ise; en dışa bir `<div>` açarak `<div>`'e `dropdown-menu` sınıfını veriyoruz. Daha sonra her bir menu elemanı için `dropdown-item` sınıfını uyguluyoruz. Son olarak, buton ve menümüzü bir `<div>` içerisine alarak bu `<div>`'e `btn-group` sınıfını vererek **dropdown** bileşenini tamamlıyoruz. Dropdown menünü boyutunu değiştirmek için butonlara uyguladığımız sınıfları (btn-sm, btn-lg) kullanabiliriz. Aşağıdaki örneği dikkatle inceleyin;

```html
  <div class="btn-group">
   <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
   <div class="dropdown-menu">
     <a class="dropdown-item" href="#">Link 1</a>
     <a class="dropdown-item" href="#">Link 2</a>
     <a class="dropdown-item" href="#">Link 3</a>
   </div>
  </div>
```

**Dropdown Çeşitleri**

Varsayılan olarak dropdown menü aşağı doğru açılır. Aşağıdaki sınıfları en dış `<div>` sınıfına vererek değiştirebiliriz.

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| dropup | Yukarı doğru açılmasını sağlar. |
| dropright | Sağa doğru açılmasını sağlar. |
| dropleft | Sola doğru açılmasını sağlar. |

**Dropdown Menü'de Başlık ve Ayraç Kullanımı**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| dropdown-header | `<h6>` etiketi sınıfına vererek menü içerisinde başlık oluşturabiliriz. |
| dropdown-divider | Ayraç oluşturur. Menü içerisinde bir `<div>` açılarak sınıfına `dropdown-divider` vererek yapıyoruz. |

**Form Oluşturma**

Bootstrap'ta form elemanları genellikle bir `<div>` içerisine alınır ve `<div>`'e `form-group` sınıfı verilerek kullanılır. Bu sınıfın kullanılmasıyla form elemanları arasına boşluklandırma yapılarak formun düzenli bir şekilde görünmesi sağlanır. Form elemanlarına stil vermek içinse her bir form elemanına `form-control` sınıfı verilir.

*checkbox* ve *radio* ları stillendirmek için en dış `<div>`'e `form-group` yerine `form-check` sınıfı verilir. `<input>` elemanına ise `form-control` yerine `form-check-input` sınıfı verilir. Formunuzda bir yazı kullanmanız gerektiğinde, bu yazıyı `<small>` etiketleri içerisine alıp bu etikete `form-text` sınıfını uygulayarak yazınızı stillendirebilirsiniz. Bunun yanı sıra renk sınıflarından da faydalanarak yazınızın daha güzel görüntülenmesini sağlayabilirsiniz.

**inline Form**

Formlarımızı nasıl yan yana gösterebiliriz ve erişilebilirliğini arttırmak için ne gibi yollar izleyebiliriz?  

İnline formlarda labeller hem görüntü hem de kapladığı yer açısından pek tercih edilmezler. Bootstrap formlarda bunu yerine `placeholder` kullanılır. Fakat `<label>`'leri sildiğimizde ekran okuyucularda anlam kargaşasına yol açar. Bu yüzden `<label>`'i silmek yerine `<label>`'in sınıfına `sr-only` veririz. Böylelikle `<label>`'in verdigi çirkin görüntüden kurtulmuş oluruz.

Örnek;

```html
  <form class="form-inline" action="/action_page.php">
    <label for="kAd" class="sr-only">Kullanıcı Adı:</label>
    <input type="text" class="form-control" id="kAd" placeholder="Kullanıcı Adı" required>

    <label for="parola" class="sr-only">Parola:</label>
    <input type="text" class="form-control mx-sm-2" id="parola" placeholder="Parola" required>

    <button type="submit" class="brn btn-primary">Giriş</button>
  </form>
```

**Formlarda Izgara(Grid) Sistemini Kullanma**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| form-row | Form elemanlarını aynı satırda göstermek için kullanırız. Önce elemanları bir `<div>` içerisine alıp sınıfını `form-row` yaparız. Daha sonrada form elemanlarının sınıfına kaplayacakları sütun (col) sayısını belirtiriz. |

**Yatay Form**

  `<label>` ile `<input>` etiketini aynı hizaya getirmek için, önce `<label>` etiketi sınıfına `col-2` ve `col-form-label` veriyoruz. Daha sonrada `<input>` etiketine de `col-10` veriyoruz. `col-form-label` etiketi dikey ortalar.

**İlerleme Çubukları (Progress Bar)**

İlerleme çubukları bir görevin veya eylemin ilerlemesini kullanıcılara göstermek için kullanılır. Nasıl oluşturulduğuna bakalım;

Öncelikle bir `<div>` oluşturulur ve sınıfına `progress` verilir. Bu sınıfla birlikte gri arkaplana sahip bir çubuk oluşturulur. Daha sonra `<div>` içerisine bir `<div>` daha açılarak sınıfına `progress-bar` sınıfı eklenir ve divin genişliği belirtilir. Böylece şu anki ilerleme durumu görüntülenir. İlerlene çubuğunun durumunu yazı ile belirtmek içinde `<div>` içerisine yazı yazılabilir. Barların arkaplan rengi varsayılan olarak mavi'dir. Barlara çizgi eklemek için `progress-bar-striped`, animasyon olarak görünmesi için ise `progress-bar-animated` sınıfları eklenebilir.

**Rozetler**

Rozetler yeni veya okunmamış öğeleri vurgulamak için kullanılır. Rozetleri kullanmak için etiketlere `badge` sınıfı eklenir. Rozetleri renklendirmek için bootstrap'daki renkler `badge-primary` öneki ile kullanılabilir. Rozetleri yuvarlak olarak kullanmak istesiğimizde `badge-pill` sınıfını kullanabiliriz.

**İçerik Haritası**

İçerik haritaları navigasyon öğesi olduğu için `<nav>` etiketini ve belirli bir hiyerarşiyi temsil ettiği için `<ol>` etiketini kullanırız. Bunları şekillendirmek için, `<ol>` etiketine `breadcrumb` sınıfını ve her liste elemanı için `breaadcrumb-item` sınıfını uyguluyoruz. Son elemanada `active` sınıfını veriyoruz.

**Navbar Sınıfları**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| navbar | Elementin navbar olduğunu ifade eder. |
| navbar- dark | Navbar arkaplan rengi. |
| navbar-expand-lg| Küçük çözünülürlükte cihazlar için menüyü küçültür. Kırılım noktasına göre ayarlanır.|






**İPUCU**

**h1 Etiketi**

| Sınıf.............................. | Açıklama |
| ---- | ---- |
| \<h1\> | Erişilibilirlik ve arama motorları(SEO) için önemlidir. Sitemizin arama motorlarında üst sıralarda çıkmasında büyük fayda sağlar. Bu yüzden bu etiketi kullanırken arama motorlarının baktığını unutmayalım. |
