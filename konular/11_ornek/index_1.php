<script src="lightbox/jquery-3.3.1.min.js"></script>
<link href="lightbox/lightbox.css" rel="stylesheet">
<script src="lightbox/lightbox.js"></script>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

<?php
  foreach (glob("*.jpg") as $dosya) { // Aktif klasör içindeki .jpg dosyalarını bul
    echo "
      <a  href='$dosya' data-lightbox='image' data-title='$dosya'>
      <img src='$dosya' height='250' style='margin: 5px;'>
      </a>
    ";
  }
?>
