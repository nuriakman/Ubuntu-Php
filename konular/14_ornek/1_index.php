<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>RESİM</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      /*  ORİGİNAL RESİM BAŞLANGICI */
      <div class="col-9 bg-info text-center">
        <div class="mt-3">
          <h4>ORİJİNAL RESİMLER</h4>
        </div>
        <?php
            # Resimleri cek
            $dizin = "buyuk/";//Resminizin Bulunduğu Yolu Yazınız
            $tutucu = opendir($dizin);
            while($dosya = readdir($tutucu)){
            if(is_file($dizin."/".$dosya))
            $resim[] = $dosya;
            }
            closedir($tutucu);

            # Ön bilgiler
            $limit = 1; //Bir sayfada gösterilecek resim sayısı
            $sf = $_GET["sf"];
            if($sf < 1) $sf = 1;
            $toplam = count($resim);

            # Bu bilgiler doğrultusunda
            $kactan = ($sf-1) * $limit;
            $kaca = ($kactan+$limit);
            if($kaca > $toplam) $kaca = $toplam;

            # $kactan başlayıp $kaca kadar resim bas
            for($i=$kactan; $i < $kaca; $i++){
            echo " <a href='".$dizin."/".$resim[$i]."' target='_blank'>
            <img class=\"img-thumbnail my-1\" onContextMenu='return false' src='".$dizin."/".$resim[$i]."'></a>";
            }
            echo" </br></br>";
            # Birden başlayıp sayfa sayısı kadar link bas
            for($i=1; $i < $toplam / $limit; $i++){
            if($sf == $i)
            echo "$in"; else
            //echo "<a class=\"sr-only\" href='index.php?sf=$i'>$i</a>";
            echo "<a class=\"badge-primary m-1 p-1 \" href='index.php?sf=$i'>$i</a>";
            }
        ?>
      </div>
      /* KÜÇÜLTÜLMÜŞ RESİM BAŞLANGICI */
      <div class="col-3 bg-success text-center">
        <div class="mt-3">
          <h4>KÜÇÜK RESİMLER</h4>
        </div>
        <?php
            # Resimleri cek
            $dizin1 = "kucuk/";//Resminizin Bulunduğu Yolu Yazınız
            $tutucu1 = opendir($dizin1);
            while($dosya1 = readdir($tutucu1)){
            if(is_file($dizin1."/".$dosya1))
            $resim1[] = $dosya1;
            }
            closedir($tutucu1);

            # Ön bilgiler
            $limit1 = 1; //Bir sayfada gösterilecek resim sayısı
            $sf = $_GET["sf"];
            if($sf < 1) $sf = 1;
            $toplam = count($resim1);

            # Bu bilgiler doğrultusunda
            $kactan = ($sf-1) * $limit1;
            $kaca = ($kactan+$limit1);
            if($kaca > $toplam) $kaca = $toplam;

            # $kactan başlayıp $kaca kadar resim bas
            for($i=$kactan; $i < $kaca; $i++){
            echo "
            <a href='".$dizin1."/".$resim1[$i]."' target='_blank'>
            <img class=\"img-thumbnail my-1\" onContextMenu='return false' src='".$dizin1."/".$resim1[$i]."'></a>";
            }
            echo" </br></br>";
            # Birden başlayıp sayfa sayısı kadar link bas
            for($i=1; $i < $toplam / $limit1; $i++){
            if($sf == $i)
            echo "$in"; else
            echo "<a class=\"sr-only\" href='index.php?sf=$i'>$i</a>";
            //echo "<a class=\"badge-primary m-1 p-1 \" href='index.php?sf=$i'>$i</a>";
            }
          ?>
      </div>
    </div>
      /* İLERİ-GERİ
    <div class="row">
      <div class="col-12">
        Hasan Çiçek
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
