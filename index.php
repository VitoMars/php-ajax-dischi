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
   <div id="app" class="main-container">
      <header>
         <div class="header">
            <img class="img" src="./img/logo.png" alt="" />
            <div class="selection">
               <select name='selection__genre' id='selectionGenre' v-model='genreSelected' @change='getGenre'>
                  <option value='' selected>Tutti</option>
                  <option :value='genre' v-for='(genre, index) in genres' :key='index' :name='genre'>{{genre}}</option>
               </select>
            </div>
         </div>

      </header>

      <main>
         <div class="song-container">
            <!-- Vecchio metodo con iniezione del php -->
            <!-- <?php
                  foreach ($db as $song) {
                     echo "<div class='carta'>";

                     echo "<img src='$song[poster]'>";
                     echo "<div class='title'> $song[title]</div>";
                     echo "<div class='little-text'> $song[author]</div>";
                     echo "<div class='little-text'> $song[year]</div>";

                     echo "</div>";
                  }
                  ?> -->


            <div class='card' v-for="(song, index) in filteredGenre" :key="index">
               <div class='carta'>
                  <img :src="song.poster" :alt="song.title">
                  <div class='title'>
                     <h3>{{song.title}}</h3>
                  </div>
                  <div class='little-text'>
                     <h4>{{song.author}}</h4>
                     <h4>{{song.year}}</h4>
                  </div>
               </div>
            </div>

         </div>
      </main>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="js/main.js"></script>
</body>

</html>