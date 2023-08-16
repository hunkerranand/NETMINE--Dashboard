<?php
    include "connection.php";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE from `customer` where id=$id";
        $con->query($sql);
    }
    header("Location: customer.php");
    exit();
?>