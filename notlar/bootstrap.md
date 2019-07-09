# BOOTSTRAP


## Bootstrap için gerekli dosyaları

- [Bootstrap-Css-Js](https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip)
- [JQuery](https://code.jquery.com/jquery-3.4.1.min.js)
- [Popper](https://unpkg.com/popper.js)

Dosyaları indirdikten sonra dizin yapısı aşağıdaki gibi olmalıdır,

```sh
  Proje Adı/
    css/
      -bootstrap.min.css
    js/
      -bootstrap.min.js
      -jquery-3.4.1.min.js
      -popper.min.js
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


## BOOTSTRAP SINIFLARI

**Kırılım Noktaları**

| Sınıf | Açıklama |
| ---- | ---- |
| xs | Çözünürlüğü 576px'den küçük cihazlar. |
| sm | Çözünürlüğü 576px ile 768px dahil arasında olan cihazlar (Cep telefonları vb.). |
| md | Çözünürlüğü 768px ile 992px dahil arasında olan cihazlar (Tablet vb.). |
| lg | Çözünürlüğü 992px ile 1200px dahil arasında olan cihazlar (Notebook vb.). |
| xl | Çözünürlüğü 1200px den büyük cihazlar (Televizyon, Dizüstü vb.). |

**Temel Sınıflar**

| Sınıf | Açıklama |
| ---- | ---- |
| container | Ana kapsayıcı. Satınların tam olarak yerleşmesi için kesinlikle ihtiyaç vardır.
Kenarlardan 15px boşluk bırakır. |
| container-fluid | Ana kapsayıcı. Sağdan ve soldan boşluk bırakmadan tamamen ekranı kaplar. |
| row | Satırları ifade eder. Sütunlar sadece satırlar içerisinde olmalıdır. Aksi halde sayfada
 dağılmalar olur. Katmanlar arasında 15px boşluk kalır. |
| col | Sütun sınıfını temsil eder. Bir satırda en fazla 12 sütun olur. 12 den fazla olursa alta geçer. |
| offset-sm-1 | Sütunu 1 ileriden başlatır. 1 ile 11 e kadar değerlerde özelleştirilebilir. |

**Hizalama Sınıfları**

| Sınıf | Açıklama |
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

| Sınıf | Açıklama |
| ---- | ---- |
|order-1| Sıralama küçükten büyüğe doğru sıralar (1,2,3,4,5,6,7,8,9,10,11,12).|
|order-first| Birinci sırada gösterir.|
|order-last| Son sırada gösterir.|
|order-sm-1| sm kırılma noktasına gelince 1. sırada gösterir. "sm" yerine diğer kırılma noktaları, "1" yerine first ve last kullanılabilir.|

**Metin Hizalama Sınıfları**

| Sınıf | Açıklama |
| ---- | ---- |
| text-justify | Metinleri iki yana yaslar. |
| text-left | Metni istediğiniz yöne yaslar (left, center, right). |
| text-sm-left | Kırılım noktalarına göre de sola yaslıyabiliriz. |
| text-md-center | Kırılım noktalarına göre de ortalayabiliriz. |
| text-xl-right | Kırılım noktalarına göre de sağa yaslıyabiliriz. |

**Renk Sınıfları**

| Sınıf | Açıklama |
| ---- | ---- |
| bg-primary | Arka plana renk verir (primary, secondary, lsuccess, danger, warning, ingo, light, dark, white). |
| bg-transparent | Arka plana rengini transparan yapar. |
| text-primary | Metine rengi verir. Yukarıdaki renkler geçerlidir. |
| text-muted | Metin rengini soluklaştırır. Slogan gibi ikincil bir yapıda kullanabiliriz. |

**Kenarlık Sınıfları**

| Sınıf | Açıklama |
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

| Sınıf | Açıklama |
| ---- | ---- |
| m-5 | 3 rem dış boşluk verir (0, 1, 2, 3, 4, 5, auto). Auto değeri sadece margin için kullanılır. |
| mt-5 | Yukarıdan 3 rem boşluk verir (mt:yukarıdan, mb:aşağıdan, ml:soldan, mr:sağdan, mx: sol ve sağdan, my:aşağı ve yukarıdan boşluk atar). |
| m-sm-2 | Kırılma noktalarına göre de boşluk verebilirsiniz. |
| ml-sm-2 | Hem yön hemde kırılma noktalarına göre boşluk verme. |

**Float-Clearfix**

| Sınıf | Açıklama |
| ---- | ---- |
| float-left | Elemanları sola yaslar. |
| float-right |Elemanları sağa yaslar. |
| float-none | Serbest. |
| float-sm-left | Kırılma noktalarına göre de float verebiliriz. |
| clearfix | Float atadığımız elemenleri bir diz içerisine alarak, float değerlerini temizleriz. Böylece float vermediğimiz elementler aralara karışmaz. |

 **Görüntüleme Sınıfları (Display)**

| Sınıf | Açıklama |
| ---- | ---- |
| d-[özellik | Görüntüleme. |
| d-[kırılma noktası]-[özellik] | Kırılma noktasına göre görüntüleme. |
| d-print-[özellik] | Yazıcıda görüntüleme. |
| invisible | Elementi gizler ama sayfadaki yerini hala korur. |
| visible | invisible ile gizlediğimiz elementin içerisindeki her hangi bir yeri göstermemizi sağlar. |


Özellik yerine aşağıdakilerden size uygun olanı yazılacak!

| Sınıf | Açıklama |
| ---- | ---- |
| none | Elementin ekranda görüntülenmemesini sağlar. |
| inline | Elementi "span" gibi satır içi elementi olarak görüntülenmesini sağlar. Yükseklik ve genişlik değerinin bir etkisi olmaz. |
| inline-block | İnline ile aynıdır, fakat yükseklik ve genişlik değerleri uygulanabilir. |
| block | Uygulandığı elementi "H" etiketi gibi blok element olarak görüntülenmesini sağlar. Uygulanan element yeni satırdan başlar ve bulunduğu alanın tün genişliğini kaplar. |
| table | Uygulandığı elementin tablo etiketi gibi davranmasını sağlar. |
| table-cell | Uygulandığı elementin "td" etiketi gibi davranmasını sağlar. |
|table-row | Uygulandığı elementin "tr" etiketi gibi davranmasını sağlar. |
| flex | Uygulandığı elementin bir flex container olarak görüntülenmesini sağlar. |
| inline-flex | Uygulandığı elementin satır içi seviyesinde bir flex container olarak görüntülenmesini sağlar. |



**Boyutlandırma Sınıfları**

| Sınıf | Açıklama |
| ---- | ---- |
| w-25 | Bir elemente %25, %50, %75, %100 genişlik vermek için kullanılır.
| h-25 | Bir elemente %25, %50, %75, %100 yükseklik vermek için kullanılır.
| mw-100 | İçerisinde bulunduğu elementin genişliğini aşmışsa dış elementin genişliğine uydurmak.
| mh-100 | İçerisinde bulunduğu elementin yüksekliğini aşmışsa dış elementin genişliğine uydurmak.

**Dikey hizalama Sınıfları**

Bu sınıf sadece inline, inline-block, inline-table ve table-cell elementlerinde çalışır.

| Sınıf | Açıklama |
| ---- | ---- |
| aling-basaline | Elementi ana çizgisine hizalar.
| aling-top | Satırdaki en uzun öğerin üst kısmı ile hizalanır.
| aling-bottom | Satırdaki en kısa öğe ile hizalanır.
| aling-middle | Element ortaya hizalanır.
| aling-text-top | Ana elementinin fontunun üst kısmı ile hizalanır.
| aling-text-bottom | Ana elementinin fontunun alt kısmı ile hizalanır.

**Position Sınıfları**

| Sınıf | Açıklama |
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

| Sınıf | Açıklama |
| ---- | ---- |
| text-hide | h1 etiketine bu sınıfı verdikten sonra, `background-image` özelliğine istediğimiz resmin adresini verip, genişlik ve yüksekliğini ayarlıyoruz. Böylece ekranda resim görülüyor fakat arama motorları `h1` etiketinde yazdığımız metne görür. |

**Kapatma İkonu**

| Sınıf | Açıklama |
| ---- | ---- |
| close | Buton sınıfına bu özelliği verdikten sonra, etiket arasına `&times;` kapatma işareti konularak yapılır. |

**Ekran Okuyucu Optimizasyonu**

| Sınıf | Açıklama |
| ---- | ---- |
| sr-only | Elementi ekran okuyucular dışındaki tüm cihazlarda gizler. Sayfa tasarımına bir etki etmez. Web sayfanızın erişilebilir özelliğini arttırır. Ekran okuyucularına şu an hangi sayfada oldukları hakkında bilgi vermiş olur. Örneğin görme engelli bir kişiye hata mesajı vermek içinde kullanılabilir. Uyarı mesajları `<span>` etiketi içerisinde verilebilir. |
| sr-only-focusable | Bağlantının normal kullanıcılarında görmesini sağlar. |
| aria-label | Uyarı mesajının kapatma işaretinin ekran okuyucuları için bir şey ifade etmesini sağlar. |
| aria-hidden | Ekran okuyucuların elementi görmemesini sağlayabiliriz. |

**Başlık Sınıfları**

| Sınıf | Açıklama |
| ---- | ---- |
| display-1 | Başlık stilidir (1, 2, 3, 4). Daha büyük boyutlarda ve dikkat çekici yazı stili kullanılır. |

**Öne Çıkan Metin**

| Sınıf | Açıklama |
| ---- | ---- |
| lead | Yazı stilini değiştirip daha belirgin yapar. |

## BAZI ÖNEMLİ ETİKETLER

**Satır İçi Metin Etiketleri**

Her etiket görünümüne göre değil, kullanma amacına göre kullanılmalıdır. Çünkü; tarayıcılar etikete göre yorumlar.

| Sınıf | Açıklama |
| ---- | ---- |
| <mark> | Gerekli kelimeleri belirginleştirmenize yarar. Renklendirir. |
| <del> | Silindiğini göstermek istediğiniz kelime yada metinlerde kullanılır. Yazının üzerine çizgi çeker. |
| <s> | Artık doğru, net ve ilgili olmayan metni işaret etmek için kullanılır. Bu da yazının üzerine çizgi çeker. |
| <ins> | Belgeye sonradan eklenmiş metni tanımlar. Metnin altını çizer. |
| <u> | Metnin altını çizmek için kullanılır. |
| <small> | Gerekli kelimeleri belirginleştirmenize yarar. Normaldan daha küçük yazar. |
| <strong> | Önemli metni tanımlamak içim kullanılır. Metni kalın yapar. |
| <em> | Vurgulanmış kelimeler için kullanılır. Metin `italik` görünür. |
| <abbr> | Kısaltmalı bir sözcüğü ifade eder. Etiket içerisinde `title` ile kısaltmanın açılımı yazılır. |

**Kod Etiketleri**

| Sınıf | Açıklama |
| ---- | ---- |
| code | Satır içerisinde kod tanımlamak için kullanılır. |

**İPUCU**

**h1 Etiketi**

| Sınıf | Açıklama |
| ---- | ---- |
| <h1> | Erişilibilirlik ve arama motorları(SEO) için önemlidir. Sitemizin arama motorlarında üst sıralarda çıkmasında büyük fayda sağlar. Bu yüzden bu etiketi kullanırken arama motorlarının baktığını unutmayalım. |
