<?php
session_start();

if(strlen($_POST['password']) > 8) {
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $email = $_POST['email'];
	   $pass = $_POST['password'];
     $_SESSION['IdUtente'] = $email;
     $serialize_email =  serialize($email);
     $serialize_password =  serialize($pass);
     $content = $serialize_email.$serialize_password;

     $registered = false;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "utenti";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT email FROM accounts";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

          if($email == $row['email']){
              $registered = true;
          }
          else {
              $registered = false;
          }
        }

     $conn->close();

    }

    if($registered == true){
      echo "Gia registrato";
    }

    else {

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        else{

          $sql = "INSERT INTO accounts (password, email)VALUES ('$pass', '$email')";

          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
           $conn->close();
        }

    }

  }
}

else {

  echo "Dati non validi";

}
