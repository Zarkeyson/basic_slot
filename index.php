<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Core PHP-Slot</title>
  </head>
  <body>
    <button type="button" name="button" onclick="location.reload()">Spin</button>
    <?php

    $p1 = rand(3,4);
    $p2 = rand(3,4);
    $p3 = rand(3,4);

    if ($p1 == 3) {
      $p1 = "&#9786";
    }
    if ($p2 == 3) {
      $p2 = "&#9786";
    }
    if ($p3 == 3) {
      $p3 = "&#9786";
    }
    echo "<p> $p1 <> $p2 <> $p3 </p>";

    if (($p1 == "&#9786")&&($p2 == "&#9786")&&($p3 == "&#9786")) {
      echo "<h1>Dobili ste jackpot!</h1>";
      $img = 1;
    }
    elseif (
      ($p1 == "&#9786" && $p2 == "&#9786")
      ||
      ($p1 == "&#9786" && $p3 == "&#9786")
      ||
      ($p2 == "&#9786" && $p3 == "&#9786")) {

      echo "<h2>Dobili ste mini jackpot!</h2><br>";
      $img = 2;
    }
    elseif (
      ($p1 == $p2)
      ||
      ($p2 == $p3)
      ||
      ($p1 == $p3)) {
      echo "<h3>Imate 2 ista znaka, nagrada 50 tokena</h3>";
      $img = 0;
    }
    elseif (
      ($p1 == $p2)
      &&
      ($p2 == $p3)) {
      echo "<h3>Imate 3 ista znaka u redu, 100 tokena";
    }
    else {
      $img = 0;
    }
    echo "<img src='img".$img.".jpg'>";

     ?>
  </body>
</html>
