<?php
    include "connection.php";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE from `sales` where id=$id";
        $con->query($sql);
    }
    header("Location: sales.php");
    exit();
?>