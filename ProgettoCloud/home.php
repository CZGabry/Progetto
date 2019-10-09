<?php session_start(); ?>
<!-- CIAO -->
<!DOCTYPE html>
<html lang="it">
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-light">

    <span class="navbar-text mr-auto">
      Benvenuto <b><?php echo $_SESSION['id']; ?> </b>
      Benvenuto <b><?php echo $_SESSION['email']; ?> </b>
    </span>

    <button type="button" class="btn btn-primary">
      <a href="logout.php" style="color:inherit">Logout</a>
    </button>
  </nav>
  <div class="row">

    <div class="login-page">
      <div class="form">
        <form class="invio_file" action="uploadImage.php" method="POST" enctype="multipart/form-data">
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

        foreach ($images as $image) {

          echo '
              <div class="col-md-3">
              <img href="home.php?hello=this.src" onclick="deleteImg(this.src)" class="img-thumbnail image-view" src="' . $image . '" /><br />
              </div>';
        }
        ?>
      </div>
    </div>


    <script>
      /*function deleteImg(_src){
  var a = "<?php delete(_src); ?>";
  alert(a);
  return false;
}*/
    </script>

    <?php

    function delete($src)
    {
      $arr = explode('/uploaded', $src);
      $important = $arr[1];
      $myFile = "./uploaded/" . $important;
      unlink($myFile) or die("Couldn't delete file");
    }

    if (isset($_GET['hello'])) {
      runMyFunction();
    }
    ?>


</body>

</html>