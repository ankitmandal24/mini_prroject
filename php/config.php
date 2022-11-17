<?php
  $conn = mysqli_connect("localhost","root","", "chat");
  if(!$conn){
    echo "Database connection established" . mysqli_connect_error();
  }
 ?>
