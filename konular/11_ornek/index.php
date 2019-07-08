<?php
  foreach (glob("*.jpg") as $dosya) { // Aktif klasör içindeki .jpg dosyalarını bul
    echo "
      <a  href='$dosya' data-lightbox='image' data-title='$dosya'>
      <img src='$dosya' height='250' style='margin: 5px;'>
      </a>
    ";
  }
?>
