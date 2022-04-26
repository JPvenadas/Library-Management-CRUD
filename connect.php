<?php
 $conn = mysqli_connect('127.0.0.2:3307','root','','db_library');
 if(!$conn){
   echo "Connection Error" . mysqli_error;
 }
?>