<!DOCTYPE html>
<html>
<body>

  <form name="yukleme" method="post" action="index.php" enctype="multipart/form-data">
    <table border="0">
      <tr>
        <td>Dosya Seçiniz:</td>
        <td><input type="file" name="dosya"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="yukle" value="Yükle"></td>
      </tr>
    </table>
  </form>

  <?php
  function turkce($metin){
    $aranan=array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü"," ");
    $yerine=array("c","c","g","g","i","i","o","o","s","s","u","u","_");
    return str_replace($aranan,$yerine,$metin);
  }

  if($_POST){
    $gecici_ad=$_FILES["dosya"]["tmp_name"];
    $kalici_yol_ad="Ubuntu-Php/xxx/".turkce($_FILES["dosya"]["name"]);

    if ($_FILES["dosya"]["error"]) // hata oluştu ise
    echo "<font color='green'>Hata : ",$_FILES["dosya"]["error"],"</font>";
    else{
      if (file_exists($kalici_yol_ad)) // yüklenen dosya upload dizininde varsa
      echo "<font color='red'>Yazdığınız ad ile bir dosya zaten kayıtlıdır.</font>";
      else{
        if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
        echo "<font color='green'>Dosya başarı ile yüklendi.</font>";
        else
        echo "<font color='red'>Dosya yükleme başarısız.</font>";
      }
    }
  }
  ?>

</body>
</html>
