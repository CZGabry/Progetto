<?php
session_start();

    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $file = $_FILES['file'];
    $nomeFile = $_FILES['file']['name'] ;

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

       $sql = "INSERT into immagini (Nome, Data, IdUtente) Values ('".$nomeFile."','".date("Y/m/d")."',".$id.");" ;
       $result = $conn->query($sql);

        $conn->close();

        
