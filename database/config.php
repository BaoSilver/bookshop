<?php
   $host = "localhost";
   $username = "root";
   $password ="";
   $dbname = "bookshop";
   $conn = new mysqli($host, $username, $password, $dbname);  
   if($conn->connect_error){
   die("Kết nối không thành công:". $conn->connect_error);
   }
   echo "Kết nối thành công";
?>