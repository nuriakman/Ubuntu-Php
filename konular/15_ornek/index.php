<?php
unlink("kucuk_yazili.jpg"); // Dosya silme komutu.
$RESIM = imagecreatefromjpeg('buyuk.jpg');
// Yazı rengini BEYAZ olarak belirle
$BEYAZ = imagecolorallocate($RESIM, 255, 0, 0);
// Renk Kodları için: https://www.w3schools.com/colors/colors_picker.asp
$FONTADI = "/usr/share/fonts/truetype/freefont/FreeSans.ttf";
// Yukarıdaki font adını şu şekilde bulduk:
// sudo find / -iname "*.ttf" -type f
$YAZI = "LYK 2019 PHP SINIFI";
if(isset($_GET["YAZI"])) $YAZI = $_GET["YAZI"];
imagettftext($RESIM, 40, 0, 50, 300, $BEYAZ, $FONTADI, $YAZI);
imagejpeg($RESIM, "kucuk_yazili.jpg");
// Clear Memory
imagedestroy($RESIM);

?>

<p>
  <img src="kucuk_yazili.jpg">
</p>
