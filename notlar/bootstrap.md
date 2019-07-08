# BOOTSTRAP


## Bootstrap için gerekli dosyaları

- [Bootstrap-Css-Js](https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip)
- [JQuery](https://code.jquery.com/jquery-3.4.1.min.js)
- [Popper](https://unpkg.com/popper.js)

Dosyaları indirdikten sonra dizin yapısı aşağıdaki gibi olmalıdır,

```sh
  Proje Adı
    css
      bootstrap.min.css
    js
      bootstrap.min.js
      jquery-3.4.1.min.js
      popper.min.js
```

## İNCELİKLER

Türkçe karekterlerin düzgün çıkmasını sağlar.

```html  
  <meta charset="utf-8">
```

width=device-width : Web sayfasının genişliğini bağlanılan cihazın ekran genişliğine göre eşitler.
initial-scale=1 : Web sayfası yüklendiğinde, ilk yakınlaştırma seviyesini 1 olarak ayarlar.
shrink-to-fit=no : Web sayfasının ekrana sığması için küçültme yapılmasını önler.

```html
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
```

Java script kodları body kapatma etiketinin hemen üzerinde  ve sıralaması aşağıdaki gibi olmalıdır.

```html
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
```
