<?php
include("php/config.php"); //connection to db
error_reporting(0);
session_start();


// sending query
mysqli_query($conn,"DELETE FROM messages WHERE msg_id = '".$_GET['id']."'"); 
header("location:homea.php"); 

mysqli_query($conn,"DELETE FROM feedback WHERE id = '".$_GET['id']."'"); 
header("location:homea.php"); 

mysqli_query($conn,"DELETE FROM users WHERE unique_id = '".$_GET['id']."'"); 
header("location:homea.php"); 
?>
