<?php session_start(); ?>

<!DOCTYPE html>
<html lang="it">
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-light">

    <span class="navbar-text mr-auto">
      Benvenuto <b><?php echo $_SESSION['email']; ?> </b>
    </span>

    <button type="button" class="btn btn-primary">
      <a href="logout.php" style="color:inherit">Logout</a>
    </button>
  </nav>
  <div class="row">

    <div class="login-page">
      <div class="form">
        <form class="invio_file" action="file.php" method="POST" enctype="multipart/form-data">
          <input type="file" name="file" placeholder="photo" />
          <input class="button" type="submit" name="invio">
        </form>
      </div>
    </div>

    <div class="container-fluid uploaded">

      <h1>Immagini caricate</h1>
      <div class="row">
        <?php

        $directory = './uploaded/';
        $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);

        echo '<div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">';
        $count = 0;
        foreach ($images as $image) {
          
        echo '
        <div class="col-6 col-md-4 col-lg-3">
        <img class="w-100" src="' . $image . '" alt="First slide" data-target="#carouselExample" data-slide-to="'.$count.'">
        </div>';
      $count++; }
      echo '</div>';

        echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">';
                $count = 0;
                foreach ($images as $image) {
                  echo ' <li data-target="#carouselExample" data-slide-to="'.$count.'" class="active"></li>';
                  $count++;
                }
                echo '</ol>';
                echo '<div class="carousel-inner">';
                $count = 0;
                foreach($images as $image){
                  if($count==0){
                    echo'
                  
                <div class="carousel-item active">
                  <img class="d-block w-100" src="'.$image.'" alt="First slide">
                </div>';
                  }

                  else {
                    echo'
                  
                    <div class="carousel-item">
                      <img class="d-block w-100" src="'.$image.'" alt="First slide">
                    </div>';
                  }

                  $count++;
               
              }

              echo'
              </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>'


        
        ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </div>
    </div>





</body>

</html>