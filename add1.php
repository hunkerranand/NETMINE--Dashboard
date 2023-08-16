<?php
include "connection.php";
if(isset($_POST['add_sales'])){
   $name=$_POST['Customer'];
   $Mob=$_POST['Mobile'];
   $Ser=$_POST['Serial'];
   $Date=$_POST['Date_Time'];
   $Exp=$_POST['Exp_Date'];
   $Status = $_POST['Status'];
   



 
$sql = "insert into  customer(name,Mob,Ser,Date,Exp) values ('$name','$Mob',' $Ser','$Date','$Exp')";

  $con->query($sql);
  $con->close();
  header("location: sales.php");



   var_dump($name);
   var_dump($Mob);
   var_dump($Ser);
   var_dump($Date);
   var_dump($Exp);
   var_dump($Status);
  
   
   die();
}
?>