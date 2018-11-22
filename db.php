<?php

  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if(!$connection){
    die("<b>Database connection failed</b>" . mysqli_error($connection));
  } else {
    // echo "we are connected";
  }

 ?>
