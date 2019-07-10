<?php
  unlink("resim_kucuk.jpeg"); // Dosya silme komutu.
  $RESIM = imagecreatefromjpeg("resim_buyuk.jpeg"); //Bir dosya veya URL'den yeni bir resim oluşturur.
  $YENIRESIM = imagescale($RESIM, 300, 200); // Yeni yükseklik ve genişlik verir.
  imagejpeg($YENIRESIM, "resim_kucuk.jpeg"); // Resmi tarayıcıya veya dosyaya yazar.
  imagedestroy($YENIRESIM); // Belleği serbest bırakalım
?>

<p>
  <img src="resim_kucuk.jpeg">
</p>

<p>
  <img src="resim_buyuk.jpeg">
</p>
