<?php
$directory = 'buyuk/';
$images = glob($directory."*.jpg");

foreach($images as $image) {
  $im_php = imagecreatefromjpeg($image);
  $im_php = imagescale($im_php, 220);
  $new_height = imagesy($im_php);
  $new_name = str_replace('-1920x1080', '-640x'.$new_height, basename($image));
  imagejpeg($im_php,'kucuk/'.$new_name);
}

header ("Location:index.php");
?>
