
<?php
// Bir resim taslağı oluşturup bir metin ekleyelim
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Resmi 'basitmetin.jpg' ismiyle kaydedelim
imagejpeg($im, 'basitmetin.jpg');

// Belleği serbest bırakalım
imagedestroy($im);
?>
