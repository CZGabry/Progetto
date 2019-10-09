<?php

$file = $_FILES['file'];

if(is_null($file)) {
  header("Il file inviato non è valido", true, 400);
}

else {
  echo "Hai inserito l'immagine: ".$_FILES['file']['name'] ;
  $path = 'C:\Users\g.sacchet\Desktop\Progetti\GWP\George-W.-Push-\uploaded\\'.$_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], $path);
  header('location: home.php');
		
}
