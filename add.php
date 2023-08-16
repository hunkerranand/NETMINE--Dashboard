<?php
include "connection.php";
if(isset($_POST['add_customer'])){
   $F_name=$_POST['F_name'];
   $L_name=$_POST['L_name'];
   $Mobile=$_POST['Mobile'];
   $Email=$_POST['Email'];
   $Ship_addr=$_POST['Ship_addr'];
   $street_addr=$_POST['street_addr'];
   $city=$_POST['city'];
   $Zip=$_POST['Zip'];
   
   $Country=$_POST['Country'];
   




 
$sql = " insert into  customer(F_name,L_name,Mobile,Email,Ship_addr,street_addr,city,Zip,Country) values ('$F_name', '$L_name','$Mobile',' $Email','$Ship_addr','$street_addr','$city','$Zip','$Country')";

  $con->query($sql);
  print_r($sql);
  $con->close();
  header("location: customer.php");



   var_dump($F_name);
   var_dump($L_name);
   var_dump($Mobile);
   var_dump($Email);
   var_dump($Ship_addr);
   var_dump($street_addr);
   var_dump($city);
   var_dump($Zip);
   var_dump($Country);
   
   die();
}
?>
