<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db_name = "testing3";  
 $con=mysqli_connect("localhost","root","","testing3");


 if (mysqli_connect_error())
 {
    echo"<script>alert('connect to the database');</script>";
    exit();
 }
 
?>