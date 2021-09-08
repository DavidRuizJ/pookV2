<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pokemon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>¿Quien es ese Pokemon?</h2>
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include "include/PokemonDAO.php";
  //$result = selectAll();

  if($result) {
    //echo "SI";
    while($row=mysqli_fetch_assoc($result)) {
        echo "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                    <li data-target='#myCarousel' data-slide-to=".$row["ID_Pokemon"]."class='active'></li>
                </ol>
                <div class='carousel-inner'>
                    <div class='item active'>
                        <img src=img/".$row["Pok_Imagen"]." style='width:100%;'>
                    </div>
                </div>

                <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right'></span>
                    <span class='sr-only'>Next</span>
                </a>
              </div>";
    }
  }
  else {
      //echo "NO";
      echo "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                    <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                    <li data-target='#myCarousel' data-slide-to='1'></li>
                    <li data-target='#myCarousel' data-slide-to='2'></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class='carousel-inner'>
                    <div class='item active'>
                    <img src='img/1.jpg' alt='Los Angeles' style='width:100%;'>
                    </div>
            
                    <div class='item'>
                    <img src='img/2.jpg' alt='Chicago' style='width:100%;'>
                    </div>
                
                    <div class='item'>
                    <img src='img/3.jpg' alt='New york' style='width:100%;'>
                    </div>
                </div>
            
                <!-- Left and right controls -->
                <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>";
  }
  ?>
</body>
</html>