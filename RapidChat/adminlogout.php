<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "php/config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location:adminlogin.php");
        }else{
            header("location:homea.php");
        }
    }else{  
        header("location:adminlogin.php");
    }
?>