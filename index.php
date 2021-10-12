<?php
include "partials/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>PHP Dischi</title>
</head>

<body>
   <header>
      <div class="header">
         <img class="img" src="./img/logo.png" alt="" />
      </div>
   </header>

   <main>
      <div class="song-container">
         <?php
         foreach ($db as $song) {
            echo "<div class='carta'>";

            echo "<img src='$song[poster]'>";
            echo "<div class='title'> $song[title]</div>";
            echo "<div class='little-text'> $song[author]</div>";
            echo "<div class='little-text'> $song[year]</div>";

            echo "</div>";
         }
         ?>
      </div>
   </main>
</body>

</html>