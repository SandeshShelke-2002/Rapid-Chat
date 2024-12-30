<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE admin SET status = '{$status}' WHERE user_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../adminlogin.php");
            }
        }else{
            header("location: ../homea.php");
        }
    }else{  
        header("location: ../adminlogin.php");
    }
?>