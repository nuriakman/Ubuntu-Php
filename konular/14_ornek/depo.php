<?php

    $directory = 'res/';
    $images = glob($directory."*.jpeg");

    foreach($images as $image) {
        $im_php = imagecreatefromjpeg($image);
        $im_php = imagescale($im_php, 220);
        $new_height = imagesy($im_php);
        $new_name = str_replace('-1920x1080', '-640x'.$new_height, basename($image));
        imagejpeg($im_php,'kucuk/'.$new_name);
    }


    # Resimleri cek
    $dizin = "kucuk/";//Resminizin Bulunduğu Yolu Yazınız
    $tutucu = opendir($dizin);
    while($dosya = readdir($tutucu)){
    if(is_file($dizin."/".$dosya))
    $resim[] = $dosya;
    }
    closedir($tutucu);

    # Ön bilgiler
    $limit = 10; //Bir sayfada gösterilecek resim sayısı
    $sf = $_GET["sf"];
    if($sf < 1) $sf = 1;
    $toplam = count($resim);

    # Bu bilgiler doğrultusunda
    $kactan = ($sf-1) * $limit;
    $kaca = ($kactan+$limit);
    if($kaca > $toplam) $kaca = $toplam;

    # $kactan başlayıp $kaca kadar resim bas
    for($i=$kactan; $i < $kaca; $i++){
    echo "
    <a href='".$dizin."/".$resim[$i]."' target='_blank'>
    <img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
    border='0'></a>";
    }
    echo" </br></br></br>";
    # Birden başlayıp sayfa sayısı kadar link bas
    for($i=1; $i < $toplam / $limit; $i++){
    if($sf == $i)
    echo "$in"; else
    echo "<a href='resim.php?sf=$i'>$i</a>n";
    }



?>
