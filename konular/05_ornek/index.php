<?php

  $url="http://www.omdbapi.com/?t=the+game&y=1997&apikey=fc5c1afa";

  $json = file_get_contents($url);

  $Film = json_decode($json, true);

  echo "<p><img src='{$Film["Poster"]}'></p>";
  echo "<h1>{$Film["Title"]}</h1>";
  echo "<p><b>Film Adı  :</b> {$Film["Title"]}</p>";
  echo "<p><b>Yapım Yılı:</b> {$Film["Year"]}</p>";
  echo "<p><b>Oyuncular :</b> {$Film["Actors"]}</p>";

  // Yöntem 1:
  echo "<p><b>Puanlama (Yöntem 1) :</b><br>";
  echo "{$Film["Ratings"][0]["Source"]} : {$Film["Ratings"][0]["Value"]}<br>";
  echo "{$Film["Ratings"][1]["Source"]} : {$Film["Ratings"][1]["Value"]}<br>";
  echo "{$Film["Ratings"][2]["Source"]} : {$Film["Ratings"][2]["Value"]}<br>";

  // Yöntem 2:
  echo "<p><b>Puanlama (Yöntem 2) :</b><br>";
  foreach ($Film["Ratings"] as $key => $value) {
    echo "{$value["Source"]} : {$value["Value"]}<br>";
  }

  echo "<h1>Tüm Bilgiler</h1>";
  foreach ($Film as $key => $value) {
    if(!is_array($value)) echo "<b>{$key}</b> : {$value}<br>";
  }
?>
