# PHP Örnek Çalışmaları

## PHP ile Resim Boyutlandırma - Image Resize

```PHP
<?php
  unlink("kedi_kucuk.jpg"); // Dosya silme komutu.
  $RESIM = imagecreatefromjpeg("kedi_buyuk.jpg"); //Bir dosya veya URL'den yeni bir resim oluşturur.
  $YENIRESIM = imagescale($RESIM, 300, 200); // Yeni yükseklik ve genişlik verir.
  imagejpeg($YENIRESIM, "kedi_kucuk.jpg"); // Resmi tarayıcıya veya dosyaya yazar.
  imagedestroy($YENIRESIM); // Belleği serbest bırakalım
?>

<p>
  <img src="kedi_kucuk.jpg">
</p>

<p>
  <img src="kedi_buyuk.jpg">
</p>
```
