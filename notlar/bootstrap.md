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

**Temel Sınıflar**

- container : Ana kapsayıcı. Satınların tam olarak yerleşmesi için kesinlikle ihtiyaç vardır. Kenarlardan 15px boşluk bırakır.
- container-fluid : Ana kapsayıcı. Sağdan ve soldan boşluk bırakmadan tamamen ekranı kaplar.
- row : Satırları ifade eder. Sütunlar sadece satırlar içerisinde olmalıdır. Aksi halde sayfada dağılmalar olur. Katmanlar arasında 15px boşluk kalır.
- col : Sütun sınıfını temsil eder. Bir satırda en fazla 12 sütun olur. 12 den fazla olursa alta geçer.

**Hizalama Sınıfları**

- align-items-start : Kolonları dikey üste hizalama.
- align-items-center : Kolonları dikey ortaya hizalama.
- align-items-end : Kolonları dikey alta hizalama.
- justify-content-start : Kolonları yatay sola hizalama.
- justify-content-center : Kolonları yatay ortaya hizalama.
- justify-content-end : Kolonları yatay sağa hizalama.
- justify-content-around : Kolonları yatay eşit dağıtır.
- justify-content-between : Kolonlara yatay eşit aralık verir.

**Sıralama Sınıfları**

- order-1 : 1,2,3,.....12'ye kadar. Sıralama küçükten büyüğe doğru sıralar.
- order-first : Birinci sırada gösterir.
- order-last : Son sırada gösterir.
- order-sm-1 : sm kırılma noktasına gelince 1. sırada gösterir. "sm" yerine diğer kırılma noktaları, "1" yerine first ve last kullanılabilir.
