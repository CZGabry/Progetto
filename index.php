<?php
session_start();


if (array_key_exists('email', $_SESSION) && $_SESSION['email']) {
  header('location: home.php');
  exit();
} elseif (strlen($_POST['password']) > 8) {
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


    $email = $_POST['email'];
    $pass = $_POST['password'];
    $serialize_email =  serialize($email);
    $serialize_password =  serialize($pass);
    $getUser = file_get_contents('./session.txt');

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

    $sql = "SELECT email, password FROM accounts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        if ($email == $row["email"] && $pass == $row["password"]) {
          $_SESSION['email'] = $email;
          header('location: home.php');
          exit();
        } else {
          header('location: login.php');
        }
      }

      $conn->close();
    }
  }
} else {

  header('location: login.php');
}
