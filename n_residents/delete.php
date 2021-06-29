<?php
include "../db_conn.php";

$id= $_GET['id'];
$squary = mysqli_query($conn,"DELETE FROM `residents` WHERE id = $id");

 header("location:residents.php");
?>