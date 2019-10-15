<?php

    include ("server.php");

    $usr = $_SESSION['username'];

    $title = $_GET["title"];

    $query = "INSERT INTO users(title) 
  			  VALUES('$title')
              WHERE username = '$usr';";

    mysqli_query($db, $query);

?>