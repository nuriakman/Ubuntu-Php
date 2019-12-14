<?php
$dizin = '/var/www/html/Ubuntu-Php/xxx/';
$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);

//echo '<pre>';
if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
{
    echo "Dosya geçerli ve başarıyla yüklendi.\n";
} else {
    echo "Olası dosya yükleme saldırısı!\n";
}

echo 'Diğer hata ayıklama bilgileri:';
print_r($_FILES);

//print "</pre>";

/*
if (move_uploaded_file($_FILES['dosya']['name'], $yuklenecek_dosya))
{
  echo '<img src="tamam.jpg" width="100"><br>';
  echo "Dosya başarıyla yüklendi.<br>";

} else {
  echo "Dosya yüklenemedi!\n";
}*/
?>
