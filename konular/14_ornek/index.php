<?php
  unlink("kucuk.jpg"); // Dosya silme komutu.
  $RESIM = imagecreatefromjpeg("buyuk.jpg"); //Bir dosya veya URL'den yeni bir resim oluşturur.
  $YENIRESIM = imagescale($RESIM, 300, 200); // Yeni yükseklik ve genişlik verir.
  imagejpeg($YENIRESIM, "kucuk.jpg"); // Resmi tarayıcıya veya dosyaya yazar.
  imagedestroy($YENIRESIM); // Belleği serbest bırakalım
?>

<p>
  <img src="kucuk.jpg">
</p>

<p>
  <img src="buyuk.jpg">
</p>
